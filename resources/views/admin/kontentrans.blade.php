<!DOCTYPE html>
<html>
<head>
    <title>Manage Konten Tickets</title>
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
        <img src="https://images.pexels.com/photos/715546/pexels-photo-715546.jpeg?auto=compress&cs=tinysrgb&w=600"
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

<!-- Main Content -->
<div class="flex-1 md:ml-64 p-3">
    <!-- Toggle Button for Sidebar -->
    <button class="md:hidden toggle-sidebar p-2 text-gray-600">
        <i class="ri-menu-line text-2xl"></i>
    </button>
    
    <div class="container mt-5">
        <h2 class="mb-4">Manage Tickets</h2>
        <button class="btn btn-success mb-2" id="createNewTicket">Add Ticket</button>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Airline</th>
                    <th>Date of Journey</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Route</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Duration</th>
                    <th>Total Stops</th>
                    <th>Additional Info</th>
                    <th>Price</th>
                    <th width="100px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>
                <div class="modal-body">
                    <form id="ticketForm" name="ticketForm" class="form-horizontal">
                        <input type="hidden" name="ticket_id" id="ticket_id">
                        <div class="form-group">
                            <label for="airline" class="col-sm-4 control-label">Airline</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="airline" name="airline" placeholder="Enter Airline" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date_of_journey" class="col-sm-4 control-label">Date of Journey</label>
                            <div class="col-sm-12">
                                <input type="date" class="form-control" id="date_of_journey" name="date_of_journey" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="source" class="col-sm-4 control-label">Source</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="source" name="source" placeholder="Enter Source" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="destination" class="col-sm-4 control-label">Destination</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter Destination" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="route" class="col-sm-4 control-label">Route</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="route" name="route" placeholder="Enter Route" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dep_time" class="col-sm-4 control-label">Departure Time</label>
                            <div class="col-sm-12">
                                <input type="time" class="form-control" id="dep_time" name="dep_time" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="arrival_time" class="col-sm-4 control-label">Arrival Time</label>
                            <div class="col-sm-12">
                                <input type="time" class="form-control" id="arrival_time" name="arrival_time" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="duration" class="col-sm-4 control-label">Duration</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="duration" name="duration" placeholder="Enter Duration" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="total_stops" class="col-sm-4 control-label">Total Stops</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="total_stops" name="total_stops" placeholder="Enter Total Stops" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="additional_info" class="col-sm-4 control-label">Additional Info</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="additional_info" name="additional_info" placeholder="Enter Additional Info"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-sm-4 control-label">Price</label>
                            <div class="col-sm-12">
                                <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter Price" value="" required="">
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript">
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('tickets.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'airline', name: 'airline'},
                {data: 'date_of_journey', name: 'date_of_journey'},
                {data: 'source', name: 'source'},
                {data: 'destination', name: 'destination'},
                {data: 'route', name: 'route'},
                {data: 'dep_time', name: 'dep_time'},
                {data: 'arrival_time', name: 'arrival_time'},
                {data: 'duration', name: 'duration'},
                {data: 'total_stops', name: 'total_stops'},
                {data: 'additional_info', name: 'additional_info'},
                {data: 'price', name: 'price'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        $('#createNewTicket').click(function () {
            $('#saveBtn').val("create-ticket");
            $('#ticket_id').val('');
            $('#ticketForm').trigger("reset");
            $('#modelHeading').html("Create New Ticket");
            $('#ajaxModel').modal('show');
        });

        $('body').on('click', '.edit-ticket', function () {
            var ticket_id = $(this).data('id');
            $.get("{{ route('tickets.index') }}" + '/' + ticket_id + '/edit', function (data) {
                $('#modelHeading').html("Edit Ticket");
                $('#saveBtn').val("edit-ticket");
                $('#ajaxModel').modal('show');
                $('#ticket_id').val(data.id);
                $('#airline').val(data.airline);
                $('#date_of_journey').val(data.date_of_journey);
                $('#source').val(data.source);
                $('#destination').val(data.destination);
                $('#route').val(data.route);
                $('#dep_time').val(data.dep_time);
                $('#arrival_time').val(data.arrival_time);
                $('#duration').val(data.duration);
                $('#total_stops').val(data.total_stops);
                $('#additional_info').val(data.additional_info);
                $('#price').val(data.price);
            })
        });

        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Saving...');
            $.ajax({
                data: $('#ticketForm').serialize(),
                url: "{{ route('tickets.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    $('#ticketForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    table.draw();
                    Swal.fire(
                        'Success!',
                        'Ticket saved successfully.',
                        'success'
                    )
                    $('#saveBtn').html('Save Changes');
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
        });

        $('body').on('click', '.delete-ticket', function () {
            var ticket_id = $(this).data("id");
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
                        type: "DELETE",
                        url: "{{ route('tickets.destroy', '') }}" + '/' + ticket_id,
                        success: function (data) {
                            table.draw();
                            Swal.fire(
                                'Deleted!',
                                'Ticket has been deleted.',
                                'success'
                            )
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
                }
            })
        });

    });
</script>


</body>
</html>
