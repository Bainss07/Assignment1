<?php
require_once 'models/Student.php';

class StudentController {
    public function create($data) {
        if (!isset($_SESSION['user_id'])) return;

        $student = new Student();
        $student->name = $data['student_name'];
        $student->student_id = $data['student_id'];
        $student->email = $data['student_email'];

        if ($student->create()) {
            $_SESSION['message'] = ['type' => 'success', 'content' => 'Student added!'];
        } else {
            $_SESSION['message'] = ['type' => 'error', 'content' => 'Failed to add student!'];
        }
    }

    
    public function read() {
        $student = new Student();
        return $student->read();
    }

    
    public function delete($id) {
        if (!isset($_SESSION['user_id'])) return;

        $student = new Student();
        $student->id = $id;

        if ($student->delete()) {
            $_SESSION['message'] = ['type' => 'success', 'content' => 'Student deleted!'];
        } else {
            $_SESSION['message'] = ['type' => 'error', 'content' => 'Failed to delete student!'];
        }
    }
}

?>
