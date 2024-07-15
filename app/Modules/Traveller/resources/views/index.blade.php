@extends('dashboard')

@section('title', 'Traveller')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div class="row py-3">
                <div class="col">
                    <h4>Traveller List</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/traveller_create') }}" class="btn btn-primary codefotech_color">
                        Add Traveller
                    </a>
                </div>
            </div>
        </div>

        <div class="row py-4 align-items-center justify-content-center">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card overflow-auto">
                    <table id="tableData" class="table table-striped table-bordered dt-responsive" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Traveller Name</th>
                                <th>Traveller Email</th>
                                <th>Traveller Phone</th>
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

    {{--    <script src="{{ asset('assets-1/js/others/jquery-3.7.1.min.js') }}"></script> --}}
    {{--    <script src="{{ asset('assets-1/js/others/jquery.dataTables.min.js') }}"></script> --}}

    <script>
        $(document).ready(function() {
            getList();
        });

        async function getList() {
            try {
                // let res = await axios.get('/dashboard/traveller/get');
                let res = await axios.get('/dashboard/traveller/all');

                console.log(res);

                if (res.status === 200 && res.data.status === 'success') {
                    let tableList = $('#tableList');
                    tableList.empty();

                    res.data.data.forEach(function(item, index) {
                        let statusText = item.status === 'Active' ? 'Active' : 'Inactive';
                        let badgeClass = item.status === 'Active' ?
                            'text-white bg-success px-2 py-1 small rounded' :
                            'text-white bg-danger px-2 py-1 small rounded';

                        let row = `<tr>
                                    <td>${index + 1}</td>
                                    <td>${item.traveller_name}</td>
                                    <td>${item.traveller_email}</td>
                                    <td>${item.traveller_phone}</td>
                                    <td><span class="${badgeClass}">${statusText}</span></td>
                                    <td>
                                        <a href="/dashboard/traveller_details/${item.id}" class="btn btn-sm text-white btn-success viewBtn"><i class="fas fa-eye"></i></a>
                                            <a href="/dashboard/traveller_update/${item.id}" class="btn btn-sm text-white codefotech_color editBtn"><i class="fas fa-edit"></i></a>
                                            <a href="" data-id="${item.id}" class="btn btn-sm text-white btn-danger deleteBtn"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>`;
                        tableList.append(row);
                    });

                    $('#tableData').DataTable({
                        scrollX: true,
                        responsive: true,
                        order: [
                            [0, 'desc']
                        ],
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

        $(document).on('click', '.deleteBtn', async function() {
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
