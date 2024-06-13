<!DOCTYPE html>
<html>
<head>
    <title>Manage Konten Rooms</title>
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
    <h2 class="mb-4">Add Content Rooms</h2>
    <button class="btn btn-success mb-4" id="create-new-product">Add Product</button>
    <table class="table table-bordered" id="laravel_datatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

<div class="modal fade" id="ajax-product-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="productCrudModal"></h4>
            </div>
            <div class="modal-body">
                <form id="productForm" name="productForm" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="product_id" id="product_id">
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="category" class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="category" name="category" placeholder="Enter Category" value="" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">Price</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" value="" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image" class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-12">
                            <input type="file" class="form-control" id="image" name="image">
                            <input type="hidden" name="hidden_image" id="hidden_image">
                            <img id="modal-preview" src="https://via.placeholder.com/150" alt="Preview Image" class="mt-2" hidden>
                        </div>
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    var SITEURL = "{{ url('/') }}";
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#laravel_datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: SITEURL + "/products",
                type: 'GET',
            },
            columns: [
                { data: 'id', name: 'id', visible: false },
                { data: 'title', name: 'title' },
                { data: 'category', name: 'category' },
                { data: 'price', name: 'price' },
                {
                    data: 'image',
                    name: 'image',
                    render: function(data, type, full, meta) {
                        return "<img src='" + SITEURL + "/images/" + data + "' height='50' />";
                    }
                },
                { data: 'action', name: 'action', orderable: false }
            ],
            order: [[0, 'desc']]
        });

        $('#create-new-product').click(function() {
            $('#btn-save').val("create-product");
            $('#product_id').val('');
            $('#productForm').trigger("reset");
            $('#productCrudModal').html("Add New Product");
            $('#ajax-product-modal').modal('show');
            $('#modal-preview').attr('src', 'https://via.placeholder.com/150').attr('hidden', true);
        });

        $('body').on('click', '.edit-product', function() {
            var product_id = $(this).data('id');
            $.get(SITEURL + "/products/" + product_id + '/edit', function(data) {
                $('#productCrudModal').html("Edit Product");
                $('#btn-save').val("edit-product");
                $('#ajax-product-modal').modal('show');
                $('#product_id').val(data.id);
                $('#title').val(data.title);
                $('#category').val(data.category);
                $('#price').val(data.price);
                $('#modal-preview').attr('src', SITEURL + '/images/' + data.image).removeAttr('hidden');
                $('#hidden_image').val(data.image);
            })
        });

        $('body').on('click', '#delete-product', function() {
            var product_id = $(this).data("id");
            if (confirm("Are You sure want to delete !")) {
                $.ajax({
                    type: "DELETE",
                    url: SITEURL + "/products/" + product_id,
                    success: function(data) {
                        var oTable = $('#laravel_datatable').dataTable();
                        oTable.fnDraw(false);
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            }
        });

        $('body').on('submit', '#productForm', function(e) {
            e.preventDefault();
            var actionType = $('#btn-save').val();
            $('#btn-save').html('Sending..');
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: SITEURL + "/products",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    $('#productForm').trigger("reset");
                    $('#ajax-product-modal').modal('hide');
                    $('#btn-save').html('Save Changes');
                    var oTable = $('#laravel_datatable').dataTable();
                    oTable.fnDraw(false);
                },
                error: function(data) {
                    console.log('Error:', data);
                    $('#btn-save').html('Save Changes');
                }
            });
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#modal-preview').attr('src', e.target.result).removeAttr('hidden');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#image').change(function() {
            readURL(this);
        });
    });
</script>
</div>
</body>
</html>

