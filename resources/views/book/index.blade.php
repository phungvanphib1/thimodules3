@extends('master')
@section('content')
    <h1>Trang Sách</h1>


    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="market-updates">
                        <div class="col-md-3 market-update-gd"><a href="{{ route('book.add') }}"
                                class="btn btn-warning ">Add Book</a></div>
                        <form action="">
                            <div class="container">
                                <div class="col-lg-12" ><input name="key" type="search" class="form-control" placeholder="search" id="searchhead">
                            </div>
                    </div>
                    </form>
                </div>




            </div>
            <div>
                <table class="table" ui-jq="footable"
                    ui-options='{
"paging": {
  "enabled": true
},
"filtering": {
  "enabled": true
},
"sorting": {
  "enabled": true
}}'>
                    <thead>
                        <tr>
                            <th data-breakpoints="xs">ID</th>
                            <th>Name</th>
                            <th>isbn</th>
                            <th>author</th>
                            <th>type</th>
                            <th>number_pages</th>
                            <th>year</th>
                            <th data-breakpoints="xs">Action</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($books as $book)
                            <tr data-expanded="true" class="item-{{ $book->id }}">
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->isbn }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->type }}</td>
                                <td>{{ $book->number_pages }}</td>
                                <td>{{ $book->year }}</td>
                                <td>
                                    <a href="{{ route('book.edit', $book->id) }}" class="btn btn-primary">Edit</a>
                                    <a data-href="{{ route('book.delete', $book->id) }}" id="{{ $book->id }}"
                                        class="btn btn-danger sm deleteIcon">Delete</i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $books->onEachSide(3)->links() }}
            </div>
        </div>
        </div>
    </section>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).on('click', '.deleteIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            let href = $(this).data('href');
            let csrf = '{{ csrf_token() }}';
            console.log(id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: href,
                        method: 'delete',
                        data: {
                            _token: csrf
                        },
                        success: function(res) {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            $('.item-' + id).remove();
                        }
                    });
                }
            })
        });
    </script>
@endsection
