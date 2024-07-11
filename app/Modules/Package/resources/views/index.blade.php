@extends('dashboard')

@section('title', 'Packages')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div class="row py-3">
                <div class="col">
                    <h4>Package List</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/packageCreate') }}" class="btn btn-primary codefotech_color">
                        Add Package
                    </a>
                </div>
            </div>
        </div>

        <div class="row py-4 align-items-center justify-content-center">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card overflow-auto">
                    <table id="tableData" class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Featured Photo</th>
                                <th>Package Name</th>
                                <th>Destination</th>
                                <th>Tour Dates</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tableList">
                            <!-- Table rows will be dynamically populated by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            getPackages();
        });

        async function getPackages() {
            try {
                let res = await axios.get('/dashboard/allPackages');

                if (res.status === 200 && res.data.status === 'success') {
                    let tableList = $('#tableList');
                    tableList.empty();

                    res.data.data.forEach(function (item, index) {
                        let row = `
                            <tr>
                                <td>${index + 1}</td>
                                <td><img style="height: 70px;width: 70px;" src="${item.photo}"></td>
                                <td>${item.package_name}</td>
                                <td>${item.destination_name}</td>
                                <td>${item.tour_start_date} - ${item.tour_end_date}</td>
                                <td>${item.price}</td>
                                <td>
                                    <a href="/dashboard/packageDetails/${item.id}" class="btn btn-sm text-white btn-success viewBtn"><i class="fas fa-eye"></i></a>
                                    <a href="/dashboard/packageUpdate/${item.id}" class="btn btn-sm text-white codefotech_color editBtn"><i class="fas fa-edit"></i></a>
                                    <a href="#" data-id="${item.id}" class="btn btn-sm text-white btn-danger deleteBtn"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>`;
                        tableList.append(row);
                    });

                    $('#tableData').DataTable({
                        scrollX: true,
                        responsive: true,
                        order: [[0, 'desc']],
                        lengthMenu: [5, 10, 15, 20, 30]
                    });
                } else {
                    errorToast(res.data.message);
                }
            } catch (error) {
                errorToast('Failed to fetch package data.');
            }
        }

        $(document).on('click', '.deleteBtn', async function () {
            let id = $(this).data('id');
            if (confirm('Are you sure you want to delete this package?')) {
                try {
                    let res = await axios.post('/dashboard/package/delete/' + id);
                    if (res.status === 200 && res.data.status === 'success') {
                        alert(res.data.message);
                        getPackages();
                    } else {
                        alert(res.data.message);
                    }
                } catch (error) {
                    alert('Failed to delete package.');
                }
            }
        });
    </script>
@endsection
