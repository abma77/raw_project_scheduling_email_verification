<!-- Add Teacher Modal -->
<div class="modal fade" id="addTeacherModal" tabindex="-1" aria-labelledby="addTeacherModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="my-2 text-start">
                    <h4>Add Teacher</h4>
                </div>
                <hr>
                <div class="my-2">
                    <form id="add-teacher-form">
                        <div class="row">
                            <div class="col-6 mt-2">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control rounded-0 shadow-none" placeholder="Username"
                                    name="username" id="username" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control rounded-0 shadow-none" placeholder="Password"
                                    name="password" id="password" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control rounded-0 shadow-none" placeholder="First Name"
                                    name="firstname" id="add-teacher-first-name" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control rounded-0 shadow-none" placeholder="Last Name"
                                    name="lastname" id="add-teacher-last-name" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Middle Name</label>
                                <input type="text" class="form-control rounded-0 shadow-none" placeholder="Middle Name"
                                    name="middlename" id="add-teacher-middle-name" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">ID Number</label>
                                <input type="text" class="form-control rounded-0 shadow-none" placeholder="ID Number"
                                    name="id_number" id="add-teacher-ctuid" maxlength="5" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control rounded-0 shadow-none" placeholder="Address"
                                    name="address" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control rounded-0 shadow-none" placeholder="Phone Number"
                                    name="phone_number" id="add-teacher-phone-number" maxlength="11" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Email</label>
                                <input id="select-master" class="form-control shadow-none rounded-0" list=""
                                    placeholder="Email" name="email" id="add-teacher-email" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Bachelor</label>
                                <input id="select-bachelor" class="form-control shadow-none rounded-0" list="bachelor"
                                    placeholder="Bachelor" name="_bachelor" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Master</label>
                                <input id="select-master" class="form-control shadow-none rounded-0" list="master"
                                    placeholder="Master" name="_master" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Doctor</label>
                                <input id="select-doctor" class="form-control shadow-none rounded-0" list="doctor"
                                    placeholder="Doctor" name="_doctor" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Special</label>
                                <input id="select-special" class="form-control shadow-none rounded-0" list="special"
                                    placeholder="Special" name="_special" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Major</label>
                                <input id="select-major" class="form-control shadow-none rounded-0" list="major"
                                    placeholder="Major" name="_major" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Minor</label>
                                <input id="select-minor" class="form-control shadow-none rounded-0" list="minor"
                                    placeholder="Minor" name="_minor" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Designation</label>
                                <input id="select-designation" class="form-control shadow-none rounded-0"
                                    list="designation" placeholder="Designation" name="_designation" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Status</label>
                                <select class="form-select rounded-0 shadow-none" name="status" id="" required>
                                    <option value="" selected>Select Status</option>
                                    <option value="Temporary">Temporary</option>
                                    <option value="Part-time">Part-time</option>
                                    <option value="Organic">Organic</option>
                                </select>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Research</label>
                                <input type="text" class="form-control shadow-none rounded-0" placeholder="Research"
                                    name="research" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Production</label>
                                <input type="text" class="form-control shadow-none rounded-0" placeholder="Production"
                                    name="production" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Extension</label>
                                <input type="text" class="form-control shadow-none rounded-0" placeholder="Extension"
                                    name="extension" required>
                            </div>
                            <div class="col-12 mt-2">
                                <label class="form-label">Others</label>
                                <input type="text" class="form-control shadow-none rounded-0" placeholder="Others"
                                    name="others" required>
                            </div>
                            <div class="col-12 my-3 d-grid">
                                <button type="submit" class="btn btn-primary shadow-none rounded-0"
                                    id="add-teacher-btn">Add Teacher</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Student Modal -->
<div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="addStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="my-2 text-start">
                    <h4>Add Student</h4>
                </div>
                <hr>
                <div class="my-2">
                    <form id="add-student-form">
                        <div class="row">
                            <div class="col-6 mt-2">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control rounded-0 shadow-none" placeholder="Username"
                                    name="username" id="username" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control rounded-0 shadow-none" placeholder="Password"
                                    name="password" id="password" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control rounded-0 shadow-none" placeholder="First Name"
                                    name="firstname" id="add-student-first-name" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control rounded-0 shadow-none" placeholder="Last Name"
                                    name="lastname" id="add-student-last-name" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Middle Name</label>
                                <input type="text" class="form-control rounded-0 shadow-none" placeholder="Middlename"
                                    name="middlename" id="add-student-middle-name" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">ID Number</label>
                                <input type="text" class="form-control rounded-0 shadow-none" placeholder="ID Number"
                                    name="id_number" id="add-student-ctuid" maxlength="7" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Address</label>
                                <input class="form-control shadow-none rounded-0" placeholder="Address" name="address"
                                    required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Phone Number</label>
                                <input id="select-bachelor" type="text" class="form-control shadow-none rounded-0"
                                    placeholder="Phone Number" name="phone_number" id="add-student-phone-number"
                                    maxlength="11" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Email</label>
                                <input id="select-master" class="form-control shadow-none rounded-0" list=""
                                    placeholder="Email" id="add-student-email" name="email" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Course</label>
                                <input id="select-doctor" class="form-control shadow-none rounded-0" list="course"
                                    placeholder="Address" name="course" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Year</label>
                                <input id="select-special" class="form-control shadow-none rounded-0" list="year"
                                    placeholder="Year" name="year" required>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Section</label>
                                <input id="select-major" class="form-control shadow-none rounded-0" list="section"
                                    placeholder="Section" name="section" required>
                            </div>

                            <div class="col-12 mt-2">
                                <label class="form-label">Status</label>
                                <select class="form-select rounded-0 shadow-none" name="status" id="" required>
                                    <option value="" selected>Select Status</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Irregular">Irregular</option>
                                </select>
                            </div>
                            <div class="col-12 my-3 d-grid">
                                <button type="submit" class="btn btn-primary shadow-none rounded-0"
                                    id="add-student-btn">Add Student</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Add A.Y. Modal -->
<div class="modal fade" id="academicYear" tabindex="-1" aria-labelledby="academicYearLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="my-2 text-start">
                    <h4>Add Academic Year</h4>
                </div>
                <hr>
                <div class="my-2">
                    <form id="add-academic-year-form">
                        <div class="my-2">
                            <label class="form-label">A.Y. Year</label>
                            <input type="text" class="form-control shadow-none rounded-0" placeholder="A.Y. Year"
                                name="academic_year">
                        </div>
                        <div class="my-2">
                            <label class="form-label">Select Semester</label>
                            <select class="form-select shadow-none rounded-0" name="select_semester">
                                <option value="" selected>Select Semester</option>
                                <option value="1st Semester">1st Semester</option>
                                <option value="2nd Semester">2nd Semester</option>
                            </select>
                        </div>
                        <div class="my-3 d-grid">
                            <button type="submit" class="btn btn-primary shadow-none rounded-0"
                                id="add-academic-year-btn">Add A.Y.</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Section Modal -->
<div class="modal fade" id="section" tabindex="-1" aria-labelledby="sectionLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="my-2 text-start">
                    <h4>Add Section</h4>
                </div>
                <hr>
                <div class="my-2">
                    <form id="add-section-form">
                        <div class="my-2">
                            <label class="form-label">Section Name</label>
                            <input type="text" class="form-control rounded-0 shadow-none" placeholder="Section Name"
                                name="section_name">
                        </div>
                        <div class="my-2">
                            <label class="form-label">Section Program</label>
                            <select name="section_program" class="form-select shadow-none rounded-0">
                                <option value="">Select Program</option>
                                <option value="Day">Day</option>
                                <option value="Night">Night</option>
                            </select>
                        </div>

                        <div class="my-2">
                            <label class="form-label">Section Major</label>
                            <input type="text" class="form-control rounded-0 shadow-none" placeholder="Section Major"
                                name="section_major">
                        </div>
                        <div class="my-3 d-grid">
                            <button type="submit" class="btn btn-primary shadow-none rounded-0" id="add-section-btn">Add
                                Section</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Room Modal -->
<div class="modal fade" id="room" tabindex="-1" aria-labelledby="roomLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="my-2 text-start">
                    <h4>Add Room</h4>
                </div>
                <hr>
                <div class="my-2">
                    <form id="add-room-form">

                        <div class="my-2">
                            <label class="form-label">Room Name</label>
                            <input type="text" class="form-control shadow-none rounded-0" placeholder="Room Name"
                                name="room_name">
                        </div>
                        <div class="my-2">
                            <label class="form-label">Room Building</label>
                            <input type="text" class="form-control shadow-none rounded-0" placeholder="Room Building"
                                name="room_building">
                        </div>
                        <div class="my-2">
                            <label class="form-label">Room Capacity</label>
                            <input type="number" min="1" class="form-control shadow-none rounded-0"
                                placeholder="Room Capacity" name="room_capacity">
                        </div>
                        <div class="my-2">
                            <label class="form-label">Room Type</label>
                            <select name="room_type" class="form-select shadow-none rounded-0">
                                <option value="">Select Room Type</option>
                                <option value="Normal">Normal</option>
                                <option value="Air Conditioned">Air Conditioned</option>
                            </select>
                        </div>
                        <div class="my-3 d-grid">
                            <button type="submit" class="btn btn-primary shadow-none rounded-0" id="add-room-btn">Add
                                Room</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Subject Modal -->
<div class="modal fade" id="addSubject" tabindex="-1" aria-labelledby="addSubjectLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="my-2 text-start">
                    <h4>Add Subject</h4>
                </div>
                <hr>
                <div class="my-2">
                    <form id="add-subject-form">
                        <div class="my-2">
                            <label class="form-label">Subject Code</label>
                            <input type="text" class="form-control shadow-none rounded-0" placeholder="Subject Name"
                                name="subject_name">
                        </div>
                        <div class="my-2">
                            <label class="form-label">Subject Title</label>
                            <input type="text" class="form-control shadow-none rounded-0" placeholder="Subject Title"
                                name="subject_title">
                        </div>
                        <div class="my-2">
                            <label class="form-label">Subject Unit</label>
                            <input type="number" class="form-control shadow-none rounded-0" min="1"
                                placeholder="Subject Unit" name="subject_unit">
                        </div>
                        <div class="my-2">
                            <label class="form-label">Subject Lecture Hour</label>
                            <input type="number" class="form-control shadow-none rounded-0" min="1"
                                placeholder="Subject Lecture Hour" name="subject_lecture_hour">
                        </div>
                        <div class="my-2">
                            <label class="form-label">Subject Laboratory Hour</label>
                            <input type="number" class="form-control shadow-none rounded-0" min="1"
                                placeholder="Subject Laboratory" name="subject_laboratory_hour">
                        </div>
                        <div class="my-3 d-grid">
                            <button type="submit" class="btn btn-primary shadow-none rounded-0" id="add-subject-btn">Add
                                Subject</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- UPDATE SCHEDULE MODAL -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="my-2">
                    <h4>Delete Schedule</h4>
                </div>
                <hr>
                <div class="my-2" id="update-schedule"></div>
            </div>
        </div>
    </div>
</div>