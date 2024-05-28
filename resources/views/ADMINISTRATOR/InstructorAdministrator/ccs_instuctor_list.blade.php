<!DOCTYPE html>
<html lang="en">

<head>
    <title>Instructor List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">

    <div style="height: 40px; background-color: #800000;"></div>
    <div class="d-flex justify-content-center align-items-center mx-5 mt-3 gap-3">
        <img src="images/ccs.png" alt="ccs Logo" style="height: 80px; width: 80px;">
        <h1 class="text-center fs-3 fw-bold">LIST OF INSTRUCTORS</h1>
        <img src="images/ccs.png" alt="ccs Logo" style="height: 80px; width: 80px;">
    </div>
    <div class="d-flex justify-content-between mx-5 mt-4">
        <div class="d-flex align-items-center">
            <span class="me-2">SHOW</span>
            <select class="form-select">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </div>
        <div class="d-flex">
            <input class="form-control" type="search" placeholder="search">
            <button class="btn ms-3 text-light" style="background-color: #800000;">Search</button>
        </div>
    </div>

    <table class="table table-bordered mx-auto mt-4">
        <thead class="table-light">
            <tr>
                <th class="text-center">ID NUMBER</th>
                <th class="text-center">NAME</th>
                <th class="text-center">DEPARTMENT</th>
                <th class="text-center">RELATIONSHIP STATUS</th>
                <th class="text-center">JOB STATUS</th>
                <th class="text-center">PHONE NUMBER</th>
                <th class="text-center">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($instructors as $instructor)
            <tr>
                <td class="text-center">{{ $instructor->id }}</td>
                <td class="text-center">{{ $instructor->name }}</td>
                <td class="text-center">{{ $instructor->department }}</td>
                <td class="text-center">{{ $instructor->status }}</td>
                <td class="text-center">{{ $instructor->job_status }}</td>
                <td class="text-center">{{ $instructor->phone_number }}</td>
                <td class="text-center">
                    <!-- QR Code Icon with Modal Trigger -->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#qrModal{{ preg_replace('/\s+/', '', $instructor->name) }}">
                        <img src="https://add.pics/images/2024/05/17/image45b9828e33046807.png" alt="QR Code" width="20" height="20">
                    </button>

                    <!-- Edit Icon with Modal Trigger -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ preg_replace('/\s+/', '', $instructor->name) }}">
                        <img src="https://add.pics/images/2024/05/16/image4553449d24d095cd.png" alt="Edit" width="20" height="20">
                    </button>

                    <!-- Delete Button -->
                    <form action="{{ route('instructors.destroy', $instructor->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <img src="https://add.pics/images/2024/05/16/imagebf37507decf00dd9.png" alt="Delete" class="mx-2" width="20" height="20">
                        </button>
                    </form>
                </td>
            </tr>

<!-- QR Code Display Modal -->
<div class="modal fade" id="qrModal{{ preg_replace('/\s+/', '', $instructor->name) }}" tabindex="-1" aria-labelledby="qrModalLabel{{ preg_replace('/\s+/', '', $instructor->name) }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="qrModalLabel{{ preg_replace('/\s+/', '', $instructor->name) }}">Instructor QR Code</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body d-flex justify-content-center align-items-center" style="min-height: 200px;">
                <!-- QR Code will be inserted here -->
                <img id="qrImage{{ preg_replace('/\s+/', '', $instructor->name) }}" src="{{ asset('storage/qrcode/' . $instructor->id . '.png') }}" alt="QR Code" class="img-fluid">
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


            <!-- Edit Instructor Modal -->
            <div class="modal fade" id="editModal{{ preg_replace('/\s+/', '', $instructor->name) }}" tabindex="-1" aria-labelledby="editModalLabel{{ preg_replace('/\s+/', '', $instructor->name) }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel{{ preg_replace('/\s+/', '', $instructor->name) }}">QR Code Generator - Instructor</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <!-- Form for editing instructor details -->
                                    <!-- ... -->
                                </div>
                                <div class="col-md-6 d-flex justify-content-center align-items-center">
                                    <!-- Placeholder for QR Code, initially hidden -->
                                    <div id="instructorQrCode{{ preg_replace('/\s+/', '', $instructor->name) }}" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">
                                        <!-- QR Code will be inserted here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <form action="{{ route('instructors.save-qr', $instructor->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="qr_data" id="qrData{{ $instructor->id }}" value="">
                                <button type="button" class="btn btn-secondary" onclick="generateInstructorQrCode('{{ $instructor->name }}', '{{ $instructor->id }}')">Generate QR Code</button>
                                <button type="submit" class="btn btn-primary ms-auto">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </table>

    <div class="position-absolute bottom-0 start-0 ms-3 mb-3 d-flex align-items-center">
        <button class="btn " style="background-color: #800000;" onclick="navigateToInstructor()">
            <img src="images/back1.png" alt="back-button" class="d-flex align-items-center" style="height: 20px;">
        </button>
        <span class="ms-4">Showing 0 to 0 of 0 entries</span>
    </div>
    <div class="position-absolute bottom-0 end-0 me-3 mb-3">
        <button class="btn text-light me-1" style="background-color: #800000;">Previous</button>
        <button class="btn text-light ms-1" style="background-color: #800000;">Next</button>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function navigateToInstructor() {
            window.location.href = "{{ route('admin') }}?redirect_to=instructor";
        }

        function generateInstructorQrCode(name, id) {
            // Remove spaces from name for the ID
            var sanitizedId = name.replace(/\s+/g, '');
            // Generate the QR code URL with only the instructor's name from the database
            const qrCodeUrl = `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${encodeURIComponent(name)}`;
            // Get the container where the QR code should be displayed
            var qrCodeContainer = document.getElementById('instructorQrCode' + sanitizedId);
            // Clear any previous QR codes
            qrCodeContainer.innerHTML = '';
            // Create an img element for the QR code
            var qrCodeImg = document.createElement('img');
            qrCodeImg.src = qrCodeUrl;
            qrCodeImg.alt = "QR Code for " + name;
            qrCodeImg.classList.add('img-fluid', 'mx-auto', 'd-block');
            // Append the new QR code image to the container
            qrCodeContainer.appendChild(qrCodeImg);
            // Set the QR code data in the hidden input field
            var qrDataInput = document.getElementById('qrData' + id);
            qrDataInput.value = name; // Set the value to be the instructor's name
        }
    </script>
</body>

</html>