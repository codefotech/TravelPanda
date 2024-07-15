@extends('dashboard')

@section('title', 'Testimonial List')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-header">
            <div class="row py-3">
                <div class="col">
                    <h4>Testimonial List</h4>
                </div>
                <div style="text-align: right;" class="col">
                    <a href="{{ url('/dashboard/testimonial_create') }}" class="btn btn-primary codefotech_color">
                        Add Testimonial
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
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Designation</th>
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
                // let res = await axios.get('/dashboard/testimonial/get');
                let res = await axios.get('/dashboard/testimonial/all');

                console.log(res);

                if (res.status === 200 && res.data.status === 'success') {
                    let tableList = $('#tableList');
                    tableList.empty();

                    res.data.data.forEach(function (item, index) {
                        let badgeClass = item.status === 'Active' ? 'text-white bg-success px-2 py-1 small rounded' : 'text-white bg-danger px-2 py-1 small rounded';

                        let row = `<tr>
                                        <td>${index + 1}</td>
                                        <td><img style="height: 70px;width: 70px;" src="${item['photo']}"></td>
                                        <td>${item.name}</td>
                                        <td>${item.designation}</td>
                                        <td>
                                            <a href="/dashboard/testimonial_details/${item.id}" class="btn btn-sm text-white btn-success viewBtn"><i class="fas fa-eye"></i></a>
                                            <a href="/dashboard/testimonial_update/${item.id}" class="btn btn-sm text-white codefotech_color editBtn"><i class="fas fa-edit"></i></a>
                                            <a href="" data-id="${item.id}" class="btn btn-sm text-white btn-danger deleteBtn"><i class="fas fa-trash"></i></a>
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
                    console.error('Failed to fetch testimonial data:', res.data.message);
                    errorToast(res.data.message);
                }
            } catch (error) {
                console.error('Error fetching testimonial data:', error);
                errorToast('Failed to fetch testimonial data.');
            }
        }

        $(document).on('click', '.deleteBtn', async function () {
            let id = $(this).data('id');
            if (confirm('Are you sure you want to delete this testimonial?')) {
                try {
                    let res = await axios.post(`/dashboard/testimonial/delete/${id}`);
                    if (res.status === 200 && res.data.status === 'success') {
                        alert(res.data.message);
                        getList();
                    } else {
                        alert(res.data.message);
                    }
                } catch (error) {
                    console.error('Error deleting testimonial:', error);
                    alert('Failed to delete testimonial.');
                }
            }
        });
    </script>

@endsection
