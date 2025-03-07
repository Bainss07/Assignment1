<hr>
<h2 class="text-center mb-4 text">Add Student</h2>
<form method="post" class="shadow p-4 rounded bg-white">
    <div class="mb-3">
        <label for="student_name" class="form-label">Student Name</label>
        <input type="text" name="student_name" id="student_name" class="form-control" placeholder="Enter student name" required>
    </div>
    <div class="mb-3">
        <label for="student_id" class="form-label">Student ID</label>
        <input type="text" name="student_id" id="student_id" class="form-control" placeholder="Enter student ID" required>
    </div>
    <div class="mb-3">
        <label for="student_email" class="form-label">Student Email</label>
        <input type="email" name="student_email" id="student_email" class="form-control" placeholder="Enter student email" required>
    </div>
    <button type="submit" name="create_student" class="btn btn-primary btn-lg w-100">Add Student</button>
</form>
