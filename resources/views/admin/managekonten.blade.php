<!DOCTYPE html>
<html>
<head>
    <title>Manage Konten Trip</title>
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <style>
        .sidebar-menu {
          transition: transform 0.3s ease-in-out;
        }
        .sidebar-overlay {
          display: none;
        }
        .sidebar-open .sidebar-menu {
          transform: translateX(0);
        }
        .sidebar-open .sidebar-overlay {
          display: block;
        }
        .sidebar-overlay {
          background-color: rgba(0, 0, 0, 0.5);
          z-index: 40;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebarOverlay = document.querySelector('.sidebar-overlay');
            const sidebar = document.querySelector('.sidebar-menu');
            const toggleSidebarBtn = document.querySelector('.toggle-sidebar');

            document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (dropdownToggle) {
                dropdownToggle.addEventListener('click', function () {
                    const dropdown = dropdownToggle.nextElementSibling;
                    dropdown.classList.toggle('hidden');
                    dropdownToggle.classList.toggle('active');
                });
            });

            sidebarOverlay.addEventListener('click', function () {
                document.body.classList.remove('sidebar-open');
            });

            toggleSidebarBtn.addEventListener('click', function () {
                document.body.classList.toggle('sidebar-open');
            });
        });
    </script>
</head>
<body class="relative">
    <!-- Side Bar -->
    <div class="fixed inset-y-0 left-0 w-64 bg-gray-900 p-4 z-50 sidebar-menu -translate-x-full md:translate-x-0 flex flex-col">
        <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
            <img src="https://images.pexels.com/photos/1680175/pexels-photo-1680175.jpeg?auto=compress&cs=tinysrgb&w=600"
                alt="Logo" class="w-8 h-8 rounded object-cover">
            <span class="text-lg font-bold text-white ml-3">Admin Account</span>
        </a>
        <ul class="mt-4 flex-1">
            <li class="mb-1 group">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                    <i class="ri-dashboard-line mr-3 text-lg"></i>
                    <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{ route('managekonten') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                    <i class="ri-map-pin-line mr-3 text-lg"></i>
                    <span class="text-sm">Manage Konten Trip</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{ route('kontenRooms') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                    <i class="fa fa-bed mr-3 text-lg"></i>
                    <span class="text-sm">Manage Konten Rooms</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{ route('kontentrans') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                    <i class="fa fa-train mr-3 text-lg"></i>
                    <span class="text-sm">Manage Konten Transport</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{ route('profile.edit') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                    <i class="ri-settings-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Profile</span>
                </a>
            </li>
        </ul>
        <div class="mt-4">
            <li class="mt-auto">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                    <i class="ri-logout-box-line mr-3 text-lg"></i>
                    <span class="text-sm">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </li>
        </div>
    </div>
    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay fixed inset-0 z-40 bg-black opacity-50 hidden md:hidden"></div>
    <!-- End Side Bar -->

    <!-- MainSection -->
    <div class="flex-1 md:ml-64 p-3">
        <!-- Toggle Button for Sidebar -->
        <button class="md:hidden toggle-sidebar p-2 text-gray-600">
            <i class="ri-menu-line text-2xl"></i>
        </button>

        <div class="container mt-5">
        <h2 class="mb-4">Manage Trips</h2>
        <button class="btn btn-success mb-4" id="create-new-trip">Add Trip</button>
        <table class="table table-bordered" id="laravel_datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>

    <div class="modal fade" id="ajax-trip-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="tripCrudModal"></h4>
                </div>
                <div class="modal-body">
                    <form id="tripForm" name="tripForm" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="trip_id" id="trip_id">
                        <div class="form-group">
                            <label for="judul" class="col-sm-2 control-label">Judul</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter Judul" value="" maxlength="50" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Enter Keterangan" required=""></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga" class="col-sm-2 control-label">Harga</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="Enter Harga" value="" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="img" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" id="img" name="img" accept="image/*">
                                <input type="hidden" name="hidden_image" id="hidden_image">
                                <img id="modal-preview" src="https://via.placeholder.com/150" alt="Preview Image" class="mt-2" hidden>
                            </div>
                        </div>

                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="btn-save">Save changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $('#laravel_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('trips.index') }}",
                    type: 'GET',
                    error: function (xhr, error, code) {
                        console.log(xhr.responseText);
                    }
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'judul', name: 'judul'},
                    {data: 'keterangan', name: 'keterangan'},
                    {data: 'harga', name: 'harga'},
                    {data: 'img', name: 'img', render: function (data, type, full, meta) {
                        return `<img src="/images/${data}" alt="Image" class="img-thumbnail" width="200" height="200"/>`;
                    }},
                    {data: 'action', name: 'action', orderable: false}
                ],
                order: [[0, 'asc']]
            });

            $('#create-new-trip').click(function () {
                $('#btn-save').val("create-trip");
                $('#trip_id').val('');
                $('#tripForm').trigger("reset");
                $('#tripCrudModal').html("Add New Trip");
                $('#ajax-trip-modal').modal('show');
                $('#modal-preview').attr('hidden', true);
            });

            $('body').on('click', '.edit-trip', function () {
                var trip_id = $(this).data('id');
                $.get('trips/' + trip_id + '/edit', function (data) {
                    $('#tripCrudModal').html("Edit Trip");
                    $('#btn-save').val("edit-trip");
                    $('#ajax-trip-modal').modal('show');
                    $('#trip_id').val(data.id);
                    $('#judul').val(data.judul);
                    $('#keterangan').val(data.keterangan);
                    $('#harga').val(data.harga);
                    $('#hidden_image').val(data.img);
                    if (data.img) {
                        $('#modal-preview').attr('src', '/images/' + data.img).attr('hidden', false);
                    } else {
                        $('#modal-preview').attr('hidden', true);
                    }
                });
            });

            $('body').on('click', '#delete-trip', function () {
                var trip_id = $(this).data("id");
                var result = confirm("Are You sure want to delete !");
                if (result) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ url('trips/delete') }}" + '/' + trip_id,
                        success: function (data) {
                            table.draw();
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
                }
            });

            $('#tripForm').on('submit', function (event) {
                event.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    data: formData,
                    url: "{{ route('trips.store') }}",
                    type: "POST",
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        $('#tripForm').trigger("reset");
                        $('#ajax-trip-modal').modal('hide');
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            });
        });
    </script>
</body>
</html>
