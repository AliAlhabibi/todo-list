<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>task manager</title>
    <link rel="stylesheet" href="assets/css/styles.css" />
  </head>
  <body>
    <div class="task-manager">
      <!-- left bar starts -->
      <div class="left-bar">
        <div class="upper-part">
          <div class="actions">
            <div class="circle"></div>
            <div class="circle-2"></div>
          </div>
        </div>

        <!-- left content starts -->
        <div class="left-content">
          <ul class="action-list">
            <li class="item">
              <img class="feather feather-inbox" src="/assets/svg/inbox.svg" alt="" />
              <span>Inbox</span>
            </li>
            <li class="item">
              <img class="feather feather-star" src="/assets/svg/star.svg" alt="" />
              <span> Today</span>
            </li>
            <li class="item">
              <img class="feather feather-calendar" src="/assets/svg/calender.svg" alt="" />
              <span>Upcoming</span>
            </li>
            <li class="item">
              <img class="feather feather-hash" src="/assets/svg/hash.svg" alt="" />
              <span>Important</span>
            </li>
            <li class="item">
              <img class="feather feather-users" src="/assets/svg/users.svg" alt="" />
              <span>Meetings</span>
            </li>
            <li class="item">
              <img class="feather feather-trash" src="/assets/svg/trash.svg" alt="" />
              <span>Trash</span>
            </li>
          </ul>

          <ul class="category-list">
            <li class="item">
              <img class="feather feather-users" src="/assets/svg/users.svg" alt="" />
              <span>Family</span>
            </li>
            <li class="item">
              <img class="feather feather-sun" src="/assets/svg/sun.svg" alt="" />
              <span>Vacation</span>
            </li>
            <li class="item">
              <img class="feather feather-trending-up" src="/assets/svg/trending.svg" alt="" />
              <span>Festival</span>
            </li>
            <li class="item">
              <img class="feather feather-zap" src="/assets/svg/zap.svg" alt="" />
              <span>Concerts</span>
            </li>
          </ul>
        </div>
        <!-- left content ends -->
      </div>
      <!--  -->
      <!-- left bar ends -->

      <!-- page content starts -->
      <div class="page-content">
        <div class="header">Today Tasks</div>
        <!-- contnet categories starts -->
        <div class="content-categories">
          <div class="label-wrapper">
            <input class="nav-item" name="nav" type="radio" id="opt-1" />
            <label class="category" for="opt-1">All</label>
          </div>
          <div class="label-wrapper">
            <input class="nav-item" name="nav" type="radio" id="opt-2" checked />
            <label class="category" for="opt-2">Important</label>
          </div>
          <div class="label-wrapper">
            <input class="nav-item" name="nav" type="radio" id="opt-3" />
            <label class="category" for="opt-3">Notes</label>
          </div>
          <div class="label-wrapper">
            <input class="nav-item" name="nav" type="radio" id="opt-4" />
            <label class="category" for="opt-4">Links</label>
          </div>
        </div>
        <!--  -->
        <!-- contemt categories ends -->
        <!-- tasks wrapper starts -->
        <div class="tasks-wrapper">
          <div class="task">
            <input class="task-item" name="task" type="checkbox" id="item-1" checked />
            <label for="item-1">
              <span class="label-text">Dashboard Design Implementation</span>
            </label>
            <span class="tag approved">Approved</span>
          </div>
          <div class="task">
            <input class="task-item" name="task" type="checkbox" id="item-2" checked />
            <label for="item-2">
              <span class="label-text">Create a userflow</span>
            </label>
            <span class="tag progress">In Progress</span>
          </div>
          <div class="task">
            <input class="task-item" name="task" type="checkbox" id="item-3" />
            <label for="item-3">
              <span class="label-text">Application Implementation</span>
            </label>
            <span class="tag review">In Review</span>
          </div>
          <div class="task">
            <input class="task-item" name="task" type="checkbox" id="item-4" />
            <label for="item-4">
              <span class="label-text">Create a Dashboard Design</span>
            </label>
            <span class="tag progress">In Progress</span>
          </div>
          <div class="task">
            <input class="task-item" name="task" type="checkbox" id="item-5" />
            <label for="item-5">
              <span class="label-text">Create a Web Application Design</span>
            </label>
            <span class="tag approved">Approved</span>
          </div>
          <div class="task">
            <input class="task-item" name="task" type="checkbox" id="item-6" />
            <label for="item-6">
              <span class="label-text">Interactive Design</span>
            </label>
            <span class="tag review">In Review</span>
          </div>
          <div class="header upcoming">Upcoming Tasks</div>
          <div class="task">
            <input class="task-item" name="task" type="checkbox" id="item-7" />
            <label for="item-7">
              <span class="label-text">Dashboard Design Implementation</span>
            </label>
            <span class="tag waiting">Waiting</span>
          </div>
          <div class="task">
            <input class="task-item" name="task" type="checkbox" id="item-8" />
            <label for="item-8">
              <span class="label-text">Create a userflow</span>
            </label>
            <span class="tag waiting">Waiting</span>
          </div>
          <div class="task">
            <input class="task-item" name="task" type="checkbox" id="item-9" />
            <label for="item-9">
              <span class="label-text">Application Implementation</span>
            </label>
            <span class="tag waiting">Waiting</span>
          </div>
          <div class="task">
            <input class="task-item" name="task" type="checkbox" id="item-10" />
            <label for="item-10">
              <span class="label-text">Create a Dashboard Design</span>
            </label>
            <span class="tag waiting">Waiting</span>
          </div>
        </div>
        <!-- tasks wrapper ends -->
      </div>
      <!--  -->
      <!-- page content ends -->

      <!-- right bar starts -->
      <div class="right-bar">
        <div class="top-part">
          <img class="feather feather-users" src="/assets/svg/users.svg" alt="" />
          <div class="count">6</div>
        </div>
        <div class="header">Schedule</div>
        <div class="right-content">
          <div class="task-box yellow">
            <div class="description-task">
              <div class="time">08:00 - 09:00 AM</div>
              <div class="task-name">Product Review</div>
            </div>
            <div class="more-button"></div>
            <div class="members">
              <img src="/assets/images/img1.jpg" alt="member" />
              <img src="/assets/images/img2.jpg" alt="member-2" />
              <img src="/assets/images/img3.jpg" alt="member-3" />
              <img src="/assets/images/img4.jpg" alt="member-4" />
            </div>
          </div>
          <div class="task-box red">
            <div class="description-task">
              <div class="time">01:00 - 02:00 PM</div>
              <div class="task-name">Team Meeting</div>
            </div>
            <div class="more-button"></div>
            <div class="members">
              <img src="/assets/images/img1.jpg" alt="member" />
              <img src="/assets/images/img2.jpg" alt="member-2" />
              <img src="/assets/images/img3.jpg" alt="member-3" />
              <img src="/assets/images/img4.jpg" alt="member-4" />
            </div>
          </div>
          <div class="task-box green">
            <div class="description-task">
              <div class="time">03:00 - 04:00 PM</div>
              <div class="task-name">Release Event</div>
            </div>
            <div class="more-button"></div>
            <div class="members">
              <img src="/assets/images/img5.jpg" alt="member" />
              <img src="/assets/images/img6.jpg" alt="member-2" />
              <img src="/assets/images/img7.jpg" alt="member-3" />
              <img src="/assets/images/img8.jpg" alt="member-4" />
              <img src="/assets/images/img9.jpg" alt="member-5" />
            </div>
          </div>
          <div class="task-box blue">
            <div class="description-task">
              <div class="time">08:00 - 09:00 PM</div>
              <div class="task-name">Release Event</div>
            </div>
            <div class="more-button"></div>
            <div class="members">
              <img src="/assets/images/img5.jpg" alt="member" />
              <img src="/assets/images/img6.jpg" alt="member-2" />
              <img src="/assets/images/img7.jpg" alt="member-3" />
              <img src="/assets/images/img8.jpg" alt="member-4" />
              <img src="/assets/images/img9.jpg" alt="member-5" />
            </div>
          </div>
          <div class="task-box yellow">
            <div class="description-task">
              <div class="time">11:00 - 12:00 PM</div>
              <div class="task-name">Practise</div>
            </div>
            <div class="more-button"></div>
            <div class="members">
              <img src="/assets/images/img1.jpg" alt="member" />
              <img src="/assets/images/img2.jpg" alt="member-2" />
              <img src="/assets/images/img3.jpg" alt="member-3" />
              <img src="/assets/images/img4.jpg" alt="member-4" />
            </div>
          </div>
        </div>
      </div>
      <!-- right bar ends -->
    </div>
  </body>
</html>
