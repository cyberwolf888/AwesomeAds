@extends('layouts.master.main')

@section('title','Price')

@section('content')
    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Price</h3>

            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <table id="dt_individual_search" class="uk-table uk-table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Ad Type</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Ad Type</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th></th>
                        </tr>
                        </tfoot>

                        <tbody>
                        @foreach($price as $data)
                            <tr>
                                <td>{{ $data->ads_type->label }}</td>
                                <td>{{ Helper::formatMoney($data->price) }}</td>
                                <td>{{ substr($data->ads_type->description, 0, 30) }}...</td>
                                <td>{{ date('d F Y',strtotime($data->created_at)) }}</td>
                                <td class="uk-text-center">
                                    <a href="{{ route('master.price.edit',['id'=>$data->id]) }}" class="ts_remove_row "><i class="md-icon material-icons md-color-light-blue-A700">mode_edit</i></a>
                                    <a href="javascript:0;" class="ts_remove_row delete" onclick="confirmmation('{{ route('master.price.delete',['id'=>$data->id]) }}')"><i class="md-icon material-icons md-color-red-A700">delete</i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent md-fab-wave-light" href="{{ route('master.price.create') }}" data-uk-tooltip="{pos:'right'}" title="Add New Price">
            <i class="material-icons">&#xE145;</i>
        </a>
    </div>
@endsection

@push('plugin_script')
<!-- datatables -->
{!! Helper::registerJs("/master/bower_components/datatables/media/js/jquery.dataTables.min.js") !!}

<!-- datatables custom integration -->
{!! Helper::registerJs("/master/js/custom/datatables_uikit.min.js") !!}

@endpush

@push('page_script')
<script>
    $(function(){
        altair_datatables.dt_individual_search()
    }),
            altair_datatables={
                dt_individual_search:function(){
                    var t=$("#dt_individual_search");
                    if(t.length){
                        t.find("tfoot th").each(function(){
                            var a=t.find("tfoot th").eq($(this).index()).text();
                            if(a==''){

                            }else {
                                $(this).html('<input type="text" class="md-input" placeholder="'+a+'" />')
                            }
                        }),
                                altair_md.inputs();
                        var a=t.DataTable({
                            "columns": [
                                {"name":"label"},
                                {"name":"price"},
                                {"name":"description"},
                                {"name":"created_at"},
                                {"name":"name","orderable":false,"searchable":false}
                            ]} );
                        a.columns().every(function(){
                            var t=this;
                            $("input",this.footer()).on("keyup change",function(){
                                t.search(this.value).draw()
                            })
                        })
                    }
                }
            };
</script>
<script>
    function confirmmation(url){
        var r = confirm("Are you sure to delete this price?");
        if (r == true) {
            window.location = url;
        } else {
            return false;
        }
    }
</script>
@endpush