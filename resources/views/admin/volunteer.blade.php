<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volunteer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">

        <div class="row flex-nowrap">
            @include('admin.nav')
            <div class="col py-3" style="overflow-y: scroll; height:100vh">
                <h3 style="text-align: center;" class="my-2 mb-3">Volunteer</h3>

                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ Session::get('success') }}
                        <span class="close" style="cursor: pointer;" onclick="this.parentElement.style.display='none';"
                            aria-label="Close">
                            <span class="btn-close"></span>
                        </span>
                    </div>
                @endif

                @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show ms-5 me-5">
                        {{ Session::get('error') }}
                        <span class="close" style="cursor: pointer;" onclick="this.parentElement.style.display='none';"
                            aria-label="Close">
                            <span class="btn-close"></span>
                        </span>
                    </div>
                @endif

                @if ($volunteers->isEmpty())
                    <div class="alert alert-warning" role="alert">
                        No volunteers found.
                    </div>
                @else
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">CID</th>
                                <th scope="col">Dzongkhag</th>
                                <th scope="col">Nationality</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone Number</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            @foreach ($volunteers as $volunteer)
                                <tr class="volunteer-row" style="cursor: pointer" data-bs-toggle="modal"
                                    data-bs-target="#volunteerModal" data-fullname="{{ $volunteer->fullName }}"
                                    data-gender="{{ $volunteer->gender }}" data-cid="{{ $volunteer->cid }}"
                                    data-dzongkhag="{{ $volunteer->dzongkhag }}"
                                    data-nationality="{{ $volunteer->nationality }}"
                                    data-email="{{ $volunteer->email }}" data-dob="{{ $volunteer->dob }}"
                                    data-village="{{ $volunteer->village }}" data-phone="{{ $volunteer->phone }}"
                                    data-geog="{{ $volunteer->geog }}"
                                    data-mailingAddress="{{ $volunteer->mailingAddress }}"
                                    data-id="{{ $volunteer->id }}"
                                    data-areasOfInterest="{{ $volunteer->areasOfInterest }}">
                                    <td>{{ $volunteer->id }}</td>
                                    <td>{{ $volunteer->fullName }}</td>
                                    <td>{{ $volunteer->gender }}</td>
                                    <td>{{ $volunteer->cid }}</td>
                                    <td>{{ $volunteer->dzongkhag }}</td>
                                    <td>{{ $volunteer->nationality }}</td>
                                    <td>{{ $volunteer->email }}</td>
                                    <td>{{ $volunteer->phone }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-5">
                        {{ $volunteers->links('pagination::bootstrap-5') }}
                    </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="volunteerModal" tabindex="-1" aria-labelledby="volunteerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="volunteerModalLabel">Volunteer Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>Full Name</td>
                            <td><span id="modal-fullname"></span></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td><span id="modal-dob"></span></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><span id="modal-gender"></span></td>
                        </tr>
                        <tr>
                            <td>CID</td>
                            <td><span id="modal-cid"></span></td>
                        </tr>
                        <tr>
                            <td>Village</td>
                            <td><span id="modal-village"></span></td>
                        </tr>
                        <tr>
                            <td>Geog</td>
                            <td><span id="modal-geog"></span></td>
                        </tr>
                        <tr>
                            <td>Dzongkhag</td>
                            <td><span id="modal-dzongkhag"></span></td>
                        </tr>
                        <tr>
                            <td>Nationality</td>
                            <td><span id="modal-nationality"></span></td>
                        </tr>
                        <tr>
                            <td>Mailing Address</td>
                            <td><span id="modal-mailingAddress"></span></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><span id="modal-email"></span></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><span id="modal-phone"></span></td>
                        </tr>
                        <tr>
                            <td>Areas of Interest</td>
                            <td>
                                <ul id="modal-areasOfInterest">
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-body" style="display:flex; justify-content:space-around; padding-bottom:2rem;">
                    <form id="delete-volunteer-form" action="{{ route('volunteers.destroy', $volunteer->id) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" id="showDeleteDialog"
                            class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>

                    <dialog id="deleteDialog" class="bg-light p-4"
                        style="border-radius: 10px; border: 1px solid #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                        <p style="font-size: 16px; margin-bottom: 20px;">Are you sure you want to delete this volunteer
                            data?</p>
                        <button id="confirmDelete"
                            style="background-color: #dc3545; color: #fff; border: none; padding: 8px 16px; margin-right: 10px; border-radius: 5px; cursor: pointer;">Yes,
                            delete</button>
                        <button id="cancelDelete"
                            style="background-color: #ddd; color: #333; border: none; padding: 8px 16px; border-radius: 5px; cursor: pointer;">Cancel</button>
                    </dialog>

                    <button class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal"
                        aria-label="Close">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const deleteButton = document.getElementById('showDeleteDialog');
        const deleteDialog = document.getElementById('deleteDialog');
        const confirmDeleteButton = document.getElementById('confirmDelete');
        const cancelDeleteButton = document.getElementById('cancelDelete');

        deleteButton.addEventListener('click', function() {
            deleteDialog.showModal();
        });

        confirmDeleteButton.addEventListener('click', function() {
            // Submit the form when the user confirms deletion
            document.getElementById('delete-volunteer-form').submit();
        });

        cancelDeleteButton.addEventListener('click', function() {
            // Hide the dialog box when the user cancels deletion
            deleteDialog.close();
        });

        document.querySelectorAll('.volunteer-row').forEach(row => {
            row.addEventListener('click', function() {

                var form = document.getElementById('delete-volunteer-form');
                form.action = form.action.replace(/\/\d+$/, '/' + row.getAttribute('data-id'));

                document.getElementById('modal-fullname').textContent = row.getAttribute('data-fullname');
                document.getElementById('modal-dob').textContent = row.getAttribute('data-dob');
                document.getElementById('modal-gender').textContent = row.getAttribute('data-gender');
                document.getElementById('modal-cid').textContent = row.getAttribute('data-cid');
                document.getElementById('modal-village').textContent = row.getAttribute('data-village');
                document.getElementById('modal-geog').textContent = row.getAttribute('data-geog');
                document.getElementById('modal-dzongkhag').textContent = row.getAttribute('data-dzongkhag');
                document.getElementById('modal-nationality').textContent = row.getAttribute(
                    'data-nationality');
                document.getElementById('modal-mailingAddress').textContent = row.getAttribute(
                    'data-mailingAddress');
                document.getElementById('modal-email').textContent = row.getAttribute('data-email');
                document.getElementById('modal-phone').textContent = row.getAttribute('data-phone');

                var areasOfInterest = JSON.parse(row.getAttribute('data-areasOfInterest'));
                var areasList = '';
                areasOfInterest.forEach(area => {
                    areasList += '<li class="mb-2">' + area + '</li>';
                });
                document.getElementById('modal-areasOfInterest').innerHTML = areasList;
            });
        });

        // Get the volunteer ID from the span element and set it as the action for the form
        var volunteerId = document.getElementById('modal-id').textContent;
    </script>

</body>

</html>
