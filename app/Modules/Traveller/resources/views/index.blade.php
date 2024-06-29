@extends('dashboard')

@section('title', 'Traveller')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div class="row py-3">
                <div class="col">
                    <h4>Traveller</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/travellerCreate') }}" class="btn btn-primary codefotech_color">
                        Add Traveller
                    </a>
                </div>
            </div>
        </div>

        <table class="table" id="tableData">
            <thead>
            <tr class="bg-light">
                <th>SL</th>
                <th>Traveller Name</th>
                <th>Traveller Email</th>
                <th>Traveller Phone</th>
                <th>City</th>
                <th>State</th>
                <th>Country</th>
                <th>Address</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody id="tableList">
            </tbody>
        </table>
    </div>

    <!-- Include DataTables CSS and JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        $(document).ready(function() {
            getList();
        });

        async function getList() {
            try {
                let res = await axios.get('/dashboard/traveller/get');
                console.log(res); // Log the response to check the structure

                let tableList = $('#tableList');

                if (res.data.status === 'success') {
                    tableList.empty(); // Clear the table body

                    res.data.data.forEach(function(item, index) {
                        // Determine the status text and badge class based on 'is_active' value
                        let statusText = item.is_active ? 'Active' : 'Inactive';
                        let badgeClass = item.is_active ? 'success' : 'danger';

                        let row = `<tr>
                                    <td>${index + 1}</td>
                                    <td>${item.traveller_name}</td>
                                    <td>${item.traveller_email}</td>
                                    <td>${item.traveller_phone}</td>
                                    <td>${item.city}</td>
                                    <td>${item.state}</td>
                                    <td>${item.country}</td>
                                    <td>${item.address}</td>
                                    <td><span class="badge badge-${badgeClass}">${statusText}</span></td>
                                    <td>
                                        <button data-id="${item.id}" class="btn btn-sm text-white mx-2 my-auto editBtn" style="background-image: linear-gradient(to top, rgb(0, 34, 141), rgb(37, 93, 157))">Edit</button>
                                        <button data-id="${item.id}" class="btn btn-sm text-white my-auto deleteBtn" style="background-image: linear-gradient(to top, rgb(141, 0, 0), rgb(157, 37, 37))">Delete</button>
                                    </td>
                                </tr>`;
                        tableList.append(row);
                    });

                    // Initialize DataTable after data is appended
                    $('#tableData').DataTable({
                        scrollX: true,
                        responsive: true,
                        order: [[0, 'desc']],
                        lengthMenu: [5, 10, 15, 20, 30]
                    });
                } else {
                    alert(res.data.message);
                }
            } catch (error) {
                console.error('Error fetching traveller data:', error);
                alert('Failed to fetch traveller data.');
            }
        }
    </script>

@endsection
