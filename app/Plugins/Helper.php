<?php

namespace App\Plugins;

class Helper {
    protected $assets = 'assets';

    public static function registerJs($url)
    {
        return '<script src="'. url('/assets') . $url .'" type="text/javascript"></script>';
    }
    public static function registerCss($url)
    {
        return '<link href="'. url('/assets') . $url .'" rel="stylesheet" type="text/css" />';
    }
    public static function pageTitle($title,$desc=null)
    {
        $desc = $desc == null ? '' : '<small>'. $desc .'</small>';
        $html = '<h1>'.$title.' '.$desc.'</h1>';
        return $html;
    }

    /*
     * Datatables
     */
    public static function registerDatatablesJs()
    {
        $data = Helper::registerJs('/global/scripts/datatable.js');
        $data.= Helper::registerJs('/global/plugins/datatables/datatables.min.js');
        $data.= Helper::registerJs('/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js');
        return $data;
    }
    public static function registerDatatablesCss()
    {
        $data = Helper::registerCss('/global/plugins/datatables/datatables.min.css');
        $data.= Helper::registerCss('/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css');
        return $data;
    }

    public static function registerDatatablesScript($id, $ajax, $columns, $id_button = null)
    {
        $id_button = $id_button==null ? $id.'_tools' : $id_button;
        $columns = json_encode($columns);

        $script = '<script type="text/javascript">
        var TableDatatablesButtons = function(){
                    a=function(){
                        var e=$("#'.$id.'"),
                        t=e.dataTable({
                            processing: true,
                            serverSide: true,
                            ajax: "'.$ajax.'",
                            columns: '.$columns.',
                            language:{
                                aria:{
                                        sortAscending:": activate to sort column ascending",
                                        sortDescending:": activate to sort column descending"
                                    },
                                emptyTable:"No data available in table",
                                info:"Showing _START_ to _END_ of _TOTAL_ entries",
                                infoEmpty:"No entries found",
                                infoFiltered:"(filtered1 from _MAX_ total entries)",
                                lengthMenu:"_MENU_ entries",
                                search:"Search:",
                                zeroRecords:"No matching records found"
                            },
                            buttons:[
                                {extend:"print",className:"btn dark btn-outline"},
                                {extend:"copy",className:"btn red btn-outline"},
                                {extend:"pdf",className:"btn green btn-outline"},
                                {extend:"excel",className:"btn yellow btn-outline "},
                                {extend:"csv",className:"btn purple btn-outline "},
                                {extend:"colvis",className:"btn dark btn-outline",text:"Columns"}
                            ],
                            //responsive:!0,
                            order:[[0,"asc"]],
                            //lengthMenu:[[5,10,15,20,-1],[5,10,15,20,"All"]],
                            pageLength:10
                        });
                        $("#'.$id_button.' > li > a.tool-action").on("click",function(){
                            var e=$(this).attr("data-action");
                                t.DataTable().button(e).trigger()
                        })
                    };
                    return{
                        init:function(){
                            jQuery().dataTable&&(a())
                        }
                    }
                }();
                jQuery(document).ready(function(){TableDatatablesButtons.init()});
                </script>';
        return $script;
    }
    public static function delScript($url)
    {
        $script = '<script>
                    var del = function(id){
                        if (confirm("Are you sure want to delete this data?")) {
                            var url = "'.$url.'/"+id;
                            $.ajaxSetup(
                            {
                                headers:
                                {
                                    "X-CSRF-Token": $("meta[name=\'csrf-token\']").attr("content")
                                }
                            });
                            $.ajax({
                                method: "DELETE",
                                url: url,
                                data: { id: id }
                            }).success(function( data ) {
                                $(".row-"+id).hide("slow");
                            });
                
                        } else {
                            return false;
                        }
                    };
                </script>';
        return $script;
    }

    /*
     * jQuery Validate
     */
    public static function registerValidateJs()
    {
        $data = Helper::registerJs('/global/plugins/jquery-validation/js/jquery.validate.min.js') ;
        $data.= Helper::registerJs('/global/plugins/jquery-validation/js/additional-methods.min.js');
        return $data;
    }

    public static function convertCurrency($amount,$from,$to)
    {
        $c_from = urlencode($from);
        $c_to = urlencode($to);
        $url = "http://api.fixer.io/latest?base=$c_to&symbols=$c_from";
        $result = json_decode(file_get_contents($url));
        $rate = $result->rates->$from;
        $convert = round($amount/$rate,2);
        return $convert;
    }
    public static function FileSizeConvert($bytes)
    {
        $bytes = floatval($bytes);
        $arBytes = array(
            0 => array(
                "UNIT" => "TB",
                "VALUE" => pow(1024, 4)
            ),
            1 => array(
                "UNIT" => "GB",
                "VALUE" => pow(1024, 3)
            ),
            2 => array(
                "UNIT" => "MB",
                "VALUE" => pow(1024, 2)
            ),
            3 => array(
                "UNIT" => "KB",
                "VALUE" => 1024
            ),
            4 => array(
                "UNIT" => "B",
                "VALUE" => 1
            ),
        );

        foreach($arBytes as $arItem)
        {
            if($bytes >= $arItem["VALUE"])
            {
                $result = $bytes / $arItem["VALUE"];
                $result = str_replace(".", "," , strval(round($result, 2)))." ".$arItem["UNIT"];
                break;
            }
        }
        return $result;
    }
    
}
