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

        <div class="row py-4 align-items-center justify-content-center">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card">
                    <table class="table bg-light" id="tableData">
                        <thead>
                        <tr>
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
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            getList();
        });

        async function getList() {
            try {
                let res = await axios.get('/dashboard/traveller/get');
                console.log(res);

                if (res.status === 200 && res.data.status === 'success') {
                    let tableList = $('#tableList');
                    tableList.empty();

                    res.data.data.forEach(function (item, index) {
                        let statusText = item.status ? 'Active' : 'Inactive';
                        let badgeClass = item.status ? 'text-success' : 'text-dan';

                        let row = `<tr>
                                    <td>${index + 1}</td>
                                    <td>${item.traveller_name}</td>
                                    <td>${item.traveller_email}</td>
                                    <td>${item.traveller_phone}</td>
                                    <td>${item.city}</td>
                                    <td>${item.state}</td>
                                    <td>${item.country}</td>
                                    <td>${item.address}</td>
                                    <td><span class="${badgeClass}">${statusText}</span></td>
                                    <td>
                                        <a href="/dashboard/travellerUpdate/${item.id}" class="btn btn-sm text-white mx-2 my-auto editBtn" style="background-image: linear-gradient(to top, rgb(0, 34, 141), rgb(37, 93, 157))">Edit</a>
                                        <button data-id="${item.id}" class="btn btn-sm text-white my-auto deleteBtn" style="background-image: linear-gradient(to top, rgb(141, 0, 0), rgb(157, 37, 37))">Delete</button>
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
                    console.error('Failed to fetch traveller data:', res.data.message);
                    errorToast(res.data.message);
                }
            } catch (error) {
                console.error('Error fetching traveller data:', error);
                errorToast('Failed to fetch traveller data.');
            }
        }

        $(document).on('click', '.deleteBtn', async function () {
            let id = $(this).data('id');
            if (confirm('Are you sure you want to delete this traveller?')) {
                try {
                    let res = await axios.post(`/dashboard/traveller/delete/${id}`);
                    if (res.status === 200 && res.data.status === 'success') {
                        alert(res.data.message);
                        getList();
                    } else {
                        alert(res.data.message);
                    }
                } catch (error) {
                    console.error('Error deleting traveller:', error);
                    alert('Failed to delete traveller.');
                }
            }
        });
    </script>
@endsection
