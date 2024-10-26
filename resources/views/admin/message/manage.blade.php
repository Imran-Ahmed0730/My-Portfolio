@extends('admin.master')
@section('title')
    Manage Messages
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-lg-10 offset-1">
            <div class="card">
                <div class="card-header text-center d-flex justify-content-between">
                    <h2 class="card-title">Manage Messages</h2>
                    <h4 class="text-success mb-0">
                        {{ Session('message') }}
                    </h4>
                    <div>
                        <button id="toggle-select" class="btn btn-primary mb-3">Select Messages</button>
                        <button id="delete-selected" class="btn btn-danger mb-3" style="display:none;">Delete Selected</button>
                    </div>
                </div><!--end card-header-->
                <div class="card-body">

                    <form id="delete-form" action="{{ route('messages.bulkDelete') }}" method="POST" style="display:none;">
                        @csrf
                        <input type="hidden" name="ids" id="selected-ids" value="">
                    </form>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr align="left">
                                <th><input type="checkbox" id="select-all"></th>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1 @endphp
                            @foreach($messages as $message)
                                <tr>
                                    <td><input type="checkbox" class="message-checkbox" value="{{ $message->id }}" style="display:none;"></td>
                                    <td>{{ $i++ }}.</td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->message }}</td>
                                    <td class="text-end">
                                        <div class="btn-group">
                                            <form action="{{ route('messages.remove') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $message->id }}">
                                                <button type="submit" onclick="return confirm('Please Confirm Before Deleting the Message!')" class="btn btn-outline-danger">
                                                    <i class="las la-trash-alt" style="font-size: 18px !important;"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div>
@endsection
@push('js')
    <script>
        document.getElementById('toggle-select').addEventListener('click', function() {
            const checkboxes = document.querySelectorAll('.message-checkbox');
            const deleteBtn = document.getElementById('delete-selected');
            checkboxes.forEach(checkbox => {
                checkbox.style.display = checkbox.style.display === 'none' ? 'inline' : 'none';
                deleteBtn.style.display = deleteBtn.style.display === 'none' ? 'inline' : 'none';
            });
        });

        document.getElementById('select-all').addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('.message-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });

        document.getElementById('delete-selected').addEventListener('click', function() {
            const selectedIds = Array.from(document.querySelectorAll('.message-checkbox:checked')).map(cb => cb.value);
            if (selectedIds.length > 0) {
                document.getElementById('selected-ids').value = selectedIds.join(',');
                document.getElementById('delete-form').submit();
            } else {
                alert('Please select at least one message to delete.');
            }
        });
    </script>
@endpush
