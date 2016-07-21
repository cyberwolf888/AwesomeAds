@extends('layouts.master.main')

@section('title','Inquiry')

@section('content')
    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Inquiry</h3>

            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <table id="dt_individual_search" class="uk-table uk-table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Issues</th>
                            <th>Word Count</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Issues</th>
                            <th>Word Count</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th></th>
                        </tr>
                        </tfoot>

                        <tbody>
                        @foreach($ads as $data)
                            <tr>
                                <td>{{ ucfirst($data->name) }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->issues }}</td>
                                <td>{{ $data->words }}</td>
                                <td>{{ Helper::formatMoney($data->total) }}</td>
                                <td><span class="@if($data->status == 2) md-color-light-green-800 @else md-color-light-blue-A700 @endif">{{ \App\Models\Ads::L_STATUS[$data->status] }}</span></td>
                                <td>{{ date('d F Y',strtotime($data->created_at)) }}</td>
                                <td class="uk-text-center">
                                    <a href="{{ route('master.inquiry.detail',['id'=>$data->id]) }}" target="_blank" class="ts_remove_row "><i class="md-icon material-icons md-color-light-blue-A700">find_in_page</i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
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
                        {"name":"name"},
                        {"name":"phone"},
                        {"name":"email"},
                        {"name":"issues"},
                        {"name":"words"},
                        {"name":"total"},
                        {"name":"status"},
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
@endpush