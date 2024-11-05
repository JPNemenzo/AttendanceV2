

<div>

<div id="layout-wrapper">
            <div class="main-content">
     

                <div class="page-content">
                    <div class="container-fluid">

@include('components.layouts.navbars.page-title')
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Employee Records</h4>
                                        <table id="akontable" class="table table-bordered dt-responsive all-users-datatable_length  nowrap w-100">
                                        <!-- <div id="dataTables_length" id="all-users-datatable_length"></div> -->
                                            <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Middle Name</th>
                                                <th>Suffix</th>
                                                <th>Blood Type</th>
                                                <th>Address</th>
                                                <th>Contact Number</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody id="employee-records">

                                     
                                          

                                           
                                            
                                            
                                            </tbody>
                                        </table>

                                        
<script>
    const apiUrl = 'http://localhost:8000/api/employee-records';

    async function fetchEmployeeRecords() {
        try {
            const response = await fetch(apiUrl);
            if (!response.ok) throw new Error('Network response was not ok');

            const data = await response.json();
            const tableBody = document.getElementById('employee-records');
            tableBody.innerHTML = '';

            if (data.employees && data.employees.length > 0) {
                data.employees.forEach(employee => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${employee.company ? employee.company.description : 'N/A'}</td>
                        <td>${employee.first_name}</td>
                        <td>${employee.last_name}</td>
                        <td>${employee.middle_name}</td>
                        <td>${employee.suffix}</td>
                        <td>${employee.blood_type}</td>
                        <td>${employee.address}</td>
                        <td>${employee.contact_number}</td>
                        <td class="text-center">
                            <a class="btn btn-outline-secondary btn-sm view" data-id="${employee.employee_id}" data-bs-toggle="modal" data-bs-target="#empView" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    `;

                    tableBody.appendChild(row);
                });
            } else {
                tableBody.innerHTML = '<tr><td colspan="9">No employee records found.</td></tr>'; // Adjust colspan if needed
            }
        } catch (error) {
            console.error('Error fetching data:', error);
            document.getElementById('employee-records').innerHTML = '<tr><td colspan="9">Failed to load employee records.</td></tr>'; // Adjust colspan if needed
        }
    }

    async function fetchEmployeeDetails(id) {
        const response = await fetch(`http://localhost:8000/api/employee-records/${id}`);
        if (!response.ok) throw new Error('Network response was not ok');

        const employee = await response.json();
        // Populate the modal with employee details
        document.getElementById('modal-first-name').textContent = employee.first_name;
        document.getElementById('modal-last-name').textContent = employee.last_name;
        document.getElementById('modal-middle-name').textContent = employee.middle_name;
        document.getElementById('modal-suffix').textContent = employee.suffix;
        document.getElementById('modal-blood-type').textContent = employee.blood_type;
        document.getElementById('modal-address').textContent = employee.address;
        document.getElementById('modal-contact-number').textContent = employee.contact_number;
        // Add more fields as necessary
    }

    // Event delegation to handle dynamic elements
    document.addEventListener('click', function (event) {
        if (event.target.closest('.view')) {
            const id = event.target.closest('.view').getAttribute('data-id');
            fetchEmployeeDetails(id);
        }
    });

    fetchEmployeeRecords();
</script>

        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                 <!-- modal-view -->
                 <div class="modal modal-xl fade empView" id="empView" tabindex="-1" role="dialog" aria-labelledby="empViewLabel" aria-hidden="true">
                    <div class=" modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="empViewLabel">Order Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">


                            <p class="fs-6"><strong>Name:</strong> <span id="modal-last-name"> </span> <span id="modal-suffix"></span> <span id="modal-first-name"> </span> <span id="modal-middle-name"></span> <span id="modal-suffix"></span> </p>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                  <!-- end-modal -->
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->
</div>





