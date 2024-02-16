<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donation & Membership</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #search:focus {
            outline: none;
        }
    </style>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
</head>

<body>

    @if (auth()->check())
        <div class="container-fluid">

            <div class="row flex-nowrap">
                @include('admin.nav')
                <div class="col py-3" style="overflow-y: scroll; height:100vh">
                    <h3 style="text-align: center;" class="my-2 mb-3">Donation & Membership</h3>

                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ Session::get('success') }}
                            <span class="close" style="cursor: pointer;"
                                onclick="this.parentElement.style.display='none';" aria-label="Close">
                                <span class="btn-close"></span>
                            </span>
                        </div>
                    @endif

                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade show ms-5 me-5">
                            {{ Session::get('error') }}
                            <span class="close" style="cursor: pointer;"
                                onclick="this.parentElement.style.display='none';" aria-label="Close">
                                <span class="btn-close"></span>
                            </span>
                        </div>
                    @endif

                    @if ($donations->isEmpty())
                        <div class="alert alert-warning" role="alert">
                            No donations found.
                        </div>
                    @else
                        <div style="display:flex; justify-content:center;">
                            <form action="{{ url('/admin/donation/search') }}" method="GET" class="w-100 d-flex mb-4"
                                style="justify-content: center;">
                                @csrf
                                <input id="search" type="text" name="search"
                                    placeholder="Search by name / phone / CID / Joural No. / PRNO"
                                    value="{{ old('search', request('search')) }}" class="w-50 p-2">
                                <button class="btn btn-outline-secondary ms-3">Search</button>
                            </form>
                        </div>

                        <div style="display:flex; justify-content:start;">
                            <div class="d-flex">
                                <form action="{{ url('/admin/donation/search') }}" method="GET" class="w-100 mb-4"
                                    style="justify-content: center;">
                                    @csrf
                                    <button class="btn btn-sm btn-outline-secondary ms-3">Refresh</button>
                                </form>
                                <form action="{{ url('/admin/donation/search/onetime') }}" method="GET"
                                    class="w-100 mb-4">
                                    @csrf
                                    <button class="btn btn-sm btn-outline-warning ms-3">OneTime</button>
                                </form>

                                <form action="{{ url('/admin/donation/search/monthly') }}" method="GET"
                                    class="w-100  mb-4">
                                    @csrf
                                    <button class="btn btn-sm btn-outline-success ms-3">Monthly</button>
                                </form>

                                <form action="{{ url('/admin/donation/search/yearly') }}" method="GET"
                                    class="w-100  mb-4">
                                    @csrf
                                    <button class="btn btn-sm btn-outline-primary ms-3">Yearly</button>
                                </form>
                            </div>
                        </div>

                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">CID</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Donation Type</th>
                                    <th scope="col">Donated to Account</th>
                                    <th scope="col">Joural No. / PRNO</th>
                                    <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody class="table-hover">
                                @foreach ($donations as $donation)
                                    <tr class="donation-row" style="cursor: pointer" data-bs-toggle="modal"
                                        data-bs-target="#donationModal" data-name="{{ $donation->name }}"
                                        data-cid="{{ $donation->cid }}" data-nationality="{{ $donation->nationality }}"
                                        data-dzongkhag="{{ $donation->dzongkhag }}"
                                        data-gewog="{{ $donation->gewog }}" data-village="{{ $donation->village }}"
                                        data-phone="{{ $donation->phone }}"
                                        data-donation_type="{{ $donation->donation_type }}"
                                        data-payment_platform="{{ $donation->payment_platform }}"
                                        data-paid_to_bank="{{ $donation->paid_to_bank }}"
                                        data-journal_no="{{ $donation->journal_no }}"
                                        data-amount="{{ $donation->amount }}" data-remarks="{{ $donation->remarks }}"
                                        data-id="{{ $donation->id }}">
                                        <td>{{ $donation->name }}</td>
                                        <td>{{ $donation->cid }}</td>
                                        <td>{{ $donation->phone }}</td>
                                        <td>{{ $donation->donation_type }}</td>
                                        <td>{{ $donation->paid_to_bank }}</td>
                                        <td>{{ $donation->journal_no }}</td>
                                        <td>Nu. {{ $donation->amount }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-5">
                            {{ $donations->links('pagination::bootstrap-5') }}
                        </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="donationModalLabel">Donation Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>Name</td>
                                <td><span id="modal-name"></span></td>
                            </tr>
                            <tr>
                                <td>CID</td>
                                <td><span id="modal-cid"></span></td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td><span id="modal-phone"></span></td>
                            </tr>
                            <tr>
                                <td>Village</td>
                                <td><span id="modal-village"></span></td>
                            </tr>
                            <tr>
                                <td>gewog</td>
                                <td><span id="modal-gewog"></span></td>
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
                                <td>Donation Type</td>
                                <td><span id="modal-donation_type"></span></td>
                            </tr>
                            <tr>
                                <td>Payment Paltform</td>
                                <td><span id="modal-payment_platform"></span></td>
                            </tr>
                            <tr>
                                <td>Paid to Account</td>
                                <td><span id="modal-paid_to_bank"></span></td>
                            </tr>
                            <tr>
                                <td>journal No</td>
                                <td><span id="modal-journal_no"></span></td>
                            </tr>
                            <tr>
                                <td>Amount</td>
                                <td><span id="modal-amount"></span></td>
                            </tr>
                            <tr>
                                <td>Remarks</td>
                                <td><span id="modal-remarks"></span></td>
                            </tr>

                        </table>
                    </div>
                    <div class="modal-body" style="display:flex; justify-content:space-around; padding-bottom:2rem;">
                        <form id="delete-donation-form" action="{{ route('donations.delete', $donation->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" id="showDeleteDialog"
                                class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>

                        <dialog id="deleteDialog" class="bg-light p-4"
                            style="border-radius: 10px; border: 1px solid #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                            <p style="font-size: 16px; margin-bottom: 20px;">Are you sure you want to delete this
                                donation
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
@else
    {{-- Content to show if the user is not logged in --}}
    <p style="text-align: center; margin-top: 50px;">Please login to access this content.</p>
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
            document.getElementById('delete-donation-form').submit();
        });

        cancelDeleteButton.addEventListener('click', function() {
            // Hide the dialog box when the user cancels deletion
            deleteDialog.close();
        });

        document.querySelectorAll('.donation-row').forEach(row => {
            row.addEventListener('click', function() {

                var form = document.getElementById('delete-donation-form');
                form.action = form.action.replace(/\/\d+$/, '/' + row.getAttribute('data-id'));

                document.getElementById('modal-name').textContent = row.getAttribute('data-name');
                document.getElementById('modal-cid').textContent = row.getAttribute('data-cid');
                document.getElementById('modal-phone').textContent = row.getAttribute('data-phone');

                document.getElementById('modal-nationality').textContent = row.getAttribute(
                    'data-nationality');

                document.getElementById('modal-village').textContent = row.getAttribute('data-village');
                document.getElementById('modal-gewog').textContent = row.getAttribute('data-gewog');
                document.getElementById('modal-dzongkhag').textContent = row.getAttribute('data-dzongkhag');

                document.getElementById('modal-donation_type').textContent = row.getAttribute(
                    'data-donation_type');
                document.getElementById('modal-payment_platform').textContent = row.getAttribute(
                    'data-payment_platform');
                document.getElementById('modal-paid_to_bank').textContent = row.getAttribute(
                    'data-paid_to_bank');
                document.getElementById('modal-journal_no').textContent = row.getAttribute(
                    'data-journal_no');
                document.getElementById('modal-amount').textContent = row.getAttribute('data-amount');
                document.getElementById('modal-remarks').textContent = row.getAttribute('data-remarks');

            });
        });

        // Get the donation ID from the span element and set it as the action for the form
        // var donationId = document.getElementById('modal-id').textContent;
    </script>

</body>

</html>
