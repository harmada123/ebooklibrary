@extends('layouts.admin')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
           Books
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table id="book" class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>ISBN</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#book').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/librarywithupload/public/view/get_datatable',
                columns : [
                    {data: 'id'},
                    {data: 'title'},
                    {data: 'author'},
                    {data: 'isbn',
                        "render": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<a href="' + 'description/'+ row.id + '">' + data + '</a>';
                            }

                            return data;
                        }
                    },
                ],
                pageLength: 5,
            });
        });
    </script>
    <a href=""></a>
@endsection