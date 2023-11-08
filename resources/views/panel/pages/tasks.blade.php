@extends('layouts.panel')
@section('title', 'Tasks')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Task section start -->
            <div class="tasks-section">

                <!-- Labels container start -->
                <div class="labels-container">
                    <div class="lablesContainerScroll">
                        <div class="filters-block">
                            <h5>Filters</h5>
                            <div class="filters">
                                <a href="#" class="active">
                                    <i class="icon-receipt"></i> All
                                </a>
                                <a href="#">
                                    <i class="icon-error"></i> Priority
                                </a>
                                <a href="#">
                                    <i class="icon-stars"></i> Starred
                                </a>
                                <a href="#">
                                    <i class="icon-check_circle"></i> Done
                                </a>
                                <a href="#">
                                    <i class="icon-circle-with-cross"></i> Deleted
                                </a>
                            </div>
                        </div>
                        <div class="tags-block">
                            <h5>Tags</h5>
                            <div class="tags">
                                <a href="#">
                                    <i class="icon-label text-primary"></i> Design
                                </a>
                                <a href="#">
                                    <i class="icon-label text-secondary"></i> Frontend
                                </a>
                                <a href="#">
                                    <i class="icon-label text-warning"></i> Backend
                                </a>
                                <a href="#">
                                    <i class="icon-label text-success"></i> CSS
                                </a>
                                <a href="#">
                                    <i class="icon-label text-danger"></i> Testing
                                </a>
                                <a href="#">
                                    <i class="icon-label text-dark"></i> Mobile
                                </a>
                            </div>
                        </div>												
                    </div>
                </div>
                <!-- Labels container end -->

                <!-- Tasks container start -->
                <div class="tasks-container">
                    <div class="modal fade" id="addNewTask" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addNewDocumentLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addNewDocumentLabel">Add Document</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="row gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input type="text" class="form-control">
                                                <div class="field-placeholder">Task Title</div>
                                            </div>
                                            <!-- Field wrapper end -->
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <select class="select-single js-states" title="Select Product Category" data-live-search="true">
                                                    <option>Design</option>
                                                    <option>Backend</option>
                                                    <option>Testing</option>
                                                    <option>UI Development</option>
                                                    <option>CSS</option>
                                                </select>
                                                <div class="field-placeholder">Task Type</div>
                                            </div>
                                            <!-- Field wrapper end -->
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <div class="input-group">
                                                    <input type="text" class="form-control datepicker-opens-left">
                                                    <span class="input-group-text">
                                                        <i class="icon-calendar1"></i>
                                                    </span>
                                                </div>
                                                <div class="field-placeholder">Start Date</div>
                                            </div>
                                            <!-- Field wrapper end -->
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <div class="input-group">
                                                    <input type="text" class="form-control datepicker-opens-left">
                                                    <span class="input-group-text">
                                                        <i class="icon-calendar1"></i>
                                                    </span>
                                                </div>
                                                <div class="field-placeholder">End Date</div>
                                            </div>
                                            <!-- Field wrapper end -->
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper m-0">
                                                <textarea class="form-control" rows="3"></textarea>
                                                <div class="field-placeholder">Task Details</div>
                                            </div>
                                            <!-- Field wrapper end -->
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Create Task</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tasks-header">
                        <h3>Today <span class="date" id="todays-date"></span></h3>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewTask">New Task</button>
                    </div>
                    <div class="tasksContainerScroll">
                        <!-- Row start -->
                        <div class="row no-gutters justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <section class="task-list">
                                    <h6 class="m-0 h-0">&nbsp;</h6>
                                    <!-- Task #1 -->
                                    <div class="task-block">
                                        <div class="task-checkbox">
                                            <input type="checkbox" name="task_00">
                                            <div class="ripple-container">
                                                <div class="check-off"></div>
                                                <div class="check-on">
                                                    <i class="icon-check1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-details">
                                            <div class="task-name">Create Notification</div>
                                            <div class="task-desc">Incentivize, incentivize convergence weblogs, schemas sticky plug-and-play. Customized markets, sticky one-to-one exploit.</div>
                                            <div class="task-types">
                                                <span class="badge bg-warning">Design</span>
                                                <span class="badge bg-success">Issue</span>
                                            </div>
                                        </div>
                                        <ul class="task-actions">
                                            <li>
                                                <a href="#" class="important active" data-bs-toggle="tooltip" data-bs-placement="top" title="Priority">
                                                    <i class="icon-error"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="star" data-bs-toggle="tooltip" data-pbs-lacement="top" title="Star">
                                                    <i class="icon-stars"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" id="task-actions" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="icon-more_vert"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end task-action-items" aria-labelledby="task-actions">
                                                    <a href="#" class="mark-done-item">
                                                        <i class="icon-done_all"></i> Mark as done
                                                    </a>
                                                    <a href="#" class="delete-task-item">
                                                        <i class="icon-close"></i> Delete Task
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Task #2 -->
                                    <div class="task-block">
                                        <div class="task-checkbox">
                                            <input type="checkbox" name="task_00">
                                            <div class="ripple-container">
                                                <div class="check-off"></div>
                                                <div class="check-on">
                                                    <i class="icon-check1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-details">
                                            <div class="task-name">Major Updates</div>
                                            <div class="task-desc">Global beta-test technologies beta-test clicks-and-mortar global cross-platform dynamic standards-compliant.</div>
                                            <div class="task-types">
                                                <span class="badge bg-info">Backend</span>
                                            </div>
                                        </div>
                                        <ul class="task-actions">
                                            <li>
                                                <a href="#" class="important" data-bs-toggle="tooltip" data-bs-placement="top" title="Priority">
                                                    <i class="icon-error"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="star active" data-bs-toggle="tooltip" data-bs-placement="top" title="Star">
                                                    <i class="icon-stars"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" id="task-actions2" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="icon-more_vert"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end task-action-items" aria-labelledby="task-actions2">
                                                    <a href="#" class="mark-done-item">
                                                        <i class="icon-done_all"></i> Mark as done
                                                    </a>
                                                    <a href="#" class="delete-task-item">
                                                        <i class="icon-close"></i> Delete Task
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Task #3 -->
                                    <div class="task-block task-checked">
                                        <div class="task-checkbox">
                                            <input type="checkbox" name="task_00">
                                            <div class="ripple-container">
                                                <div class="check-off"></div>
                                                <div class="check-on">
                                                    <i class="icon-check1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-details">
                                            <div class="task-name">Landing Page Design</div>
                                            <div class="task-desc">Incentivize, incentivize convergence weblogs, schemas sticky plug-and-play. Customized markets, sticky one-to-one exploit.</div>
                                            <div class="task-types">
                                                <span class="badge bg-secondary">Frontend</span>
                                            </div>
                                        </div>
                                        <ul class="task-actions">
                                            <li>
                                                <a href="#" class="important active" data-bs-toggle="tooltip" data-bs-placement="top" title="Priority">
                                                    <i class="icon-error"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="star" data-bs-toggle="tooltip" data-bs-placement="top" title="Star">
                                                    <i class="icon-stars"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" id="task-actions3" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="icon-more_vert"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end task-action-items" aria-labelledby="task-actions3">
                                                    <a href="#" class="mark-done-item">
                                                        <i class="icon-done_all"></i> Mark as done
                                                    </a>
                                                    <a href="#" class="delete-task-item">
                                                        <i class="icon-close"></i> Delete Task
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Task #4 -->
                                    <div class="task-block">
                                        <div class="task-checkbox">
                                            <input type="checkbox" name="task_00">
                                            <div class="ripple-container">
                                                <div class="check-off"></div>
                                                <div class="check-on">
                                                    <i class="icon-check1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-details">
                                            <div class="task-name">Team Meeting</div>
                                            <div class="task-desc">Incentivize, incentivize convergence weblogs, schemas sticky plug-and-play. Customized markets, sticky one-to-one exploit.</div>
                                            <div class="task-types">
                                                <span class="badge bg-info">Backend</span>
                                                <span class="badge bg-warning">Issue</span>
                                            </div>
                                        </div>
                                        <ul class="task-actions">
                                            <li>
                                                <a href="#" class="important active" data-bs-toggle="tooltip" data-bs-placement="top" title="Priority">
                                                    <i class="icon-error"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="star" data-bs-toggle="tooltip" data-bs-placement="top" title="Star">
                                                    <i class="icon-stars"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" id="task-actions4" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="icon-more_vert"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end task-action-items" aria-labelledby="task-actions4">
                                                    <a href="#" class="mark-done-item">
                                                        <i class="icon-done_all"></i> Mark as done
                                                    </a>
                                                    <a href="#" class="delete-task-item">
                                                        <i class="icon-close"></i> Delete Task
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Task #5 -->
                                    <div class="task-block">
                                        <div class="task-checkbox">
                                            <input type="checkbox" name="task_00">
                                            <div class="ripple-container">
                                                <div class="check-off"></div>
                                                <div class="check-on">
                                                    <i class="icon-check1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-details">
                                            <div class="task-name">Project Release</div>
                                            <div class="task-desc">Incentivize, incentivize convergence weblogs, schemas sticky plug-and-play. Customized markets, sticky one-to-one exploit.</div>
                                            <div class="task-types">
                                                <span class="badge bg-danger">Testing</span>
                                            </div>
                                        </div>
                                        <ul class="task-actions">
                                            <li>
                                                <a href="#" class="important active" data-bs-toggle="tooltip" data-bs-placement="top" title="Priority">
                                                    <i class="icon-error"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="star" data-bs-toggle="tooltip" data-bs-placement="top" title="Star">
                                                    <i class="icon-stars"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" id="task-actions5" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="icon-more_vert"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end task-action-items" aria-labelledby="task-actions5">
                                                    <a href="#" class="mark-done-item">
                                                        <i class="icon-done_all"></i> Mark as done
                                                    </a>
                                                    <a href="#" class="delete-task-item">
                                                        <i class="icon-close"></i> Delete Task
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Task #6 -->
                                    <div class="task-block">
                                        <div class="task-checkbox">
                                            <input type="checkbox" name="task_00">
                                            <div class="ripple-container">
                                                <div class="check-off"></div>
                                                <div class="check-on">
                                                    <i class="icon-check1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-details">
                                            <div class="task-name">Mobile App Design</div>
                                            <div class="task-desc">Incentivize, incentivize convergence weblogs, schemas sticky plug-and-play. Customized markets, sticky one-to-one exploit.</div>
                                            <div class="task-types">
                                                <span class="badge bg-primary">Design</span>
                                                <span class="badge bg-dark">Mobile</span>
                                            </div>
                                        </div>
                                        <ul class="task-actions">
                                            <li>
                                                <a href="#" class="important" data-bs-toggle="tooltip" data-bs-placement="top" title="Priority">
                                                    <i class="icon-error"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="star" data-bs-toggle="tooltip" data-bs-placement="top" title="Star">
                                                    <i class="icon-stars"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" id="task-actions6" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="icon-more_vert"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end task-action-items" aria-labelledby="task-actions6">
                                                    <a href="#" class="mark-done-item">
                                                        <i class="icon-done_all"></i> Mark as done
                                                    </a>
                                                    <a href="#" class="delete-task-item">
                                                        <i class="icon-close"></i> Delete Task
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Task #7 -->
                                    <div class="task-block">
                                        <div class="task-checkbox">
                                            <input type="checkbox" name="task_00">
                                            <div class="ripple-container">
                                                <div class="check-off"></div>
                                                <div class="check-on">
                                                    <i class="icon-check1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-details">
                                            <div class="task-name">Web Application</div>
                                            <div class="task-desc">Incentivize, incentivize convergence weblogs, schemas sticky plug-and-play. Customized markets, sticky one-to-one exploit.</div>
                                            <div class="task-types">
                                                <span class="badge bg-primary">Design</span>
                                                <span class="badge bg-info">Backend</span>
                                            </div>
                                        </div>
                                        <ul class="task-actions">
                                            <li>
                                                <a href="#" class="important" data-bs-toggle="tooltip" data-bs-placement="top" title="Priority">
                                                    <i class="icon-error"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="star active" data-bs-toggle="tooltip" data-bs-placement="top" title="Star">
                                                    <i class="icon-stars"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" id="task-actions7" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="icon-more_vert"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end task-action-items" aria-labelledby="task-actions7">
                                                    <a href="#" class="mark-done-item">
                                                        <i class="icon-done_all"></i> Mark as done
                                                    </a>
                                                    <a href="#" class="delete-task-item">
                                                        <i class="icon-close"></i> Delete Task
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Task #8 -->
                                    <div class="task-block">
                                        <div class="task-checkbox">
                                            <input type="checkbox" name="task_00">
                                            <div class="ripple-container">
                                                <div class="check-off"></div>
                                                <div class="check-on">
                                                    <i class="icon-check1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-details">
                                            <div class="task-name">Mobile App Loading</div>
                                            <div class="task-desc">Incentivize, incentivize convergence weblogs, schemas sticky plug-and-play. Customized markets, sticky one-to-one exploit.</div>
                                            <div class="task-types">
                                                <span class="badge bg-warning">Issue</span>
                                                <span class="badge bg-success">CSS</span>
                                            </div>
                                        </div>
                                        <ul class="task-actions">
                                            <li>
                                                <a href="#" class="important" data-bs-toggle="tooltip" data-bs-placement="top" title="Priority">
                                                    <i class="icon-error"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="star active" data-bs-toggle="tooltip" data-bs-placement="top" title="Star">
                                                    <i class="icon-stars"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" id="task-actions8" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="icon-more_vert"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end task-action-items" aria-labelledby="task-actions8">
                                                    <a href="#" class="mark-done-item">
                                                        <i class="icon-done_all"></i> Mark as done
                                                    </a>
                                                    <a href="#" class="delete-task-item">
                                                        <i class="icon-close"></i> Delete Task
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Task #9 -->
                                    <div class="task-block task-checked">
                                        <div class="task-checkbox">
                                            <input type="checkbox" name="task_00">
                                            <div class="ripple-container">
                                                <div class="check-off"></div>
                                                <div class="check-on">
                                                    <i class="icon-check1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-details">
                                            <div class="task-name">Not able to click on button</div>
                                            <div class="task-desc">Incentivize, incentivize convergence weblogs, schemas sticky plug-and-play. Customized markets, sticky one-to-one exploit.</div>
                                            <div class="task-types">
                                                <span class="badge bg-warning">Issue</span>
                                            </div>
                                        </div>
                                        <ul class="task-actions">
                                            <li>
                                                <a href="#" class="important" data-bs-toggle="tooltip" data-bs-placement="top" title="Priority">
                                                    <i class="icon-error"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="star" data-bs-toggle="tooltip" data-bs-placement="top" title="Star">
                                                    <i class="icon-stars"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" id="task-actions9" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="icon-more_vert"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end task-action-items" aria-labelledby="task-actions9">
                                                    <a href="#" class="mark-done-item">
                                                        <i class="icon-done_all"></i> Mark as done
                                                    </a>
                                                    <a href="#" class="delete-task-item">
                                                        <i class="icon-close"></i> Delete Task
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Task #10 -->
                                    <div class="task-block">
                                        <div class="task-checkbox">
                                            <input type="checkbox" name="task_00">
                                            <div class="ripple-container">
                                                <div class="check-off"></div>
                                                <div class="check-on">
                                                    <i class="icon-check1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-details">
                                            <div class="task-name">Darerange Picker</div>
                                            <div class="task-desc">Incentivize, incentivize convergence weblogs, schemas sticky plug-and-play. Customized markets, sticky one-to-one exploit.</div>
                                            <div class="task-types">
                                                <span class="badge bg-secondary">Frontend</span>
                                            </div>
                                        </div>
                                        <ul class="task-actions">
                                            <li>
                                                <a href="#" class="important" data-bs-toggle="tooltip" data-bs-placement="top" title="Priority">
                                                    <i class="icon-error"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="star" data-bs-toggle="tooltip" data-bs-placement="top" title="Star">
                                                    <i class="icon-stars"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" id="task-actions10" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="icon-more_vert"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end task-action-items" aria-labelledby="task-actions10">
                                                    <a href="#" class="mark-done-item">
                                                        <i class="icon-done_all"></i> Mark as done
                                                    </a>
                                                    <a href="#" class="delete-task-item">
                                                        <i class="icon-close"></i> Delete Task
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Task #11 -->
                                    <div class="task-block task-checked">
                                        <div class="task-checkbox">
                                            <input type="checkbox" name="task_00">
                                            <div class="ripple-container">
                                                <div class="check-off"></div>
                                                <div class="check-on">
                                                    <i class="icon-check1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-details">
                                            <div class="task-name">Refreshing the list after adding an item</div>
                                            <div class="task-desc">When adding an item to the list by calling CreateObjective, the list is not updated. As we're not running the OnGUI loop anymore, I'm assuming that the binding magic is not enough here and that I must trigger a rendering of the tree manually?</div>
                                            <div class="task-types">
                                                <span class="badge bg-primary">Design</span>
                                                <span class="badge bg-warning">Issue</span>
                                            </div>
                                        </div>
                                        <ul class="task-actions">
                                            <li>
                                                <a href="#" class="important" data-bs-toggle="tooltip" data-bs-placement="top" title="Priority">
                                                    <i class="icon-error"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="star active" data-bs-toggle="tooltip" data-bs-placement="top" title="Star">
                                                    <i class="icon-stars"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" id="task-actions11" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="icon-more_vert"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end task-action-items" aria-labelledby="task-actions11">
                                                    <a href="#" class="mark-done-item">
                                                        <i class="icon-done_all"></i> Mark as done
                                                    </a>
                                                    <a href="#" class="delete-task-item">
                                                        <i class="icon-close"></i> Delete Task
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Task #12 -->
                                    <div class="task-block">
                                        <div class="task-checkbox">
                                            <input type="checkbox" name="task_00">
                                            <div class="ripple-container">
                                                <div class="check-off"></div>
                                                <div class="check-on">
                                                    <i class="icon-check1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-details">
                                            <div class="task-name">Reloading the Landing Page</div>
                                            <div class="task-desc">The best landing pages are clutter-free and well-organized. We’ll get to this more in the next section. But for now, keep in mind that the same holds true for what’s under the hood too.</div>
                                            <div class="task-types">
                                                <span class="badge bg-secondary">Frontend</span>
                                                <span class="badge bg-dark">Mobile</span>
                                            </div>
                                        </div>
                                        <ul class="task-actions">
                                            <li>
                                                <a href="#" class="important active" data-bs-toggle="tooltip" data-bs-placement="top" title="Priority">
                                                    <i class="icon-error"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="star active" data-bs-toggle="tooltip" data-bs-placement="top" title="Star">
                                                    <i class="icon-stars"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" id="task-actions12" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="icon-more_vert"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end task-action-items" aria-labelledby="task-actions12">
                                                    <a href="#" class="mark-done-item">
                                                        <i class="icon-done_all"></i> Mark as done
                                                    </a>
                                                    <a href="#" class="delete-task-item">
                                                        <i class="icon-close"></i> Delete Task
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>
                </div>
                <!-- Tasks container end -->

            </div>
            <!-- Task section end -->

        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Content wrapper end -->
@endsection

@push('style')
<!-- Bootstrap Select CSS -->
<link rel="stylesheet" href="{{ asset('vendor/bs-select/bs-select.css') }}"/>
		
<!-- Date Range CSS -->
<link rel="stylesheet" href="{{ asset('vendor/daterange/daterange.css') }}"/>
@endpush

@push('script')
<!-- Bootstrap Select JS -->
<script src="{{ asset('vendor/bs-select/bs-select.min.js') }}"></script>
<script src="{{ asset('vendor/bs-select/bs-select-custom.js') }}"></script>

<!-- Date Range JS -->
<script src="{{ asset('vendor/daterange/daterange.js') }}"></script>
<script src="{{ asset('vendor/daterange/custom-daterange.js') }}"></script>
@endpush