<!-- Bootstrap CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h2 class="mb-4">Service Management</h2>
    <!-- Add / Update Service Form -->
    <form id="serviceForm" class="row g-3 mb-4">
        <input type="hidden" id="serviceId" name="serviceId">
        <div class="col-md-6">
            <label for="serviceName" class="form-label">Service Name</label>
            <input type="text" class="form-control" id="serviceName" name="serviceName" required>
        </div>
        <div class="col-md-6">
            <label for="serviceDescription" class="form-label">Description</label>
            <input type="text" class="form-control" id="serviceDescription" name="serviceDescription" required>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary" id="addBtn">Add Service</button>
            <button type="button" class="btn btn-success d-none" id="updateBtn">Update Service</button>
            <button type="reset" class="btn btn-secondary" id="resetBtn">Reset</button>
        </div>
    </form>

    <!-- Services Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Service Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="servicesTableBody">
                <!-- Dynamic rows go here -->
                <!-- Example static row:
                <tr>
                    <td>1</td>
                    <td>Web Hosting</td>
                    <td>Reliable web hosting service</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Modify</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                -->
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS CDN (for responsive features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>