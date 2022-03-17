@extends('layouts.backend')

@section('title')
admin dashboard
@endsection

@section('top-menu')
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Money</p>
                <h5 class="font-weight-bolder">
                  $53,000
                </h5>
                <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">+55%</span>
                  since yesterday
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Users</p>
                <h5 class="font-weight-bolder">
                  2,300
                </h5>
                <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">+3%</span>
                  since last week
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">New Clients</p>
                <h5 class="font-weight-bolder">
                  +3,462
                </h5>
                <p class="mb-0">
                  <span class="text-danger text-sm font-weight-bolder">-2%</span>
                  since last quarter
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Sales</p>
                <h5 class="font-weight-bolder">
                  $103,430
                </h5>
                <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
<div class="table-responsive p-0">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
          <th class="text-secondary opacity-7"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">John Michael</h6>
                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Manager</p>
            <p class="text-xs text-secondary mb-0">Organization</p>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="badge badge-sm bg-gradient-success">Online</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
          </td>
          <td class="align-middle">
            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Edit
            </a>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">Alexa Liras</h6>
                <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Programator</p>
            <p class="text-xs text-secondary mb-0">Developer</p>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="badge badge-sm bg-gradient-secondary">Offline</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
          </td>
          <td class="align-middle">
            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Edit
            </a>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user3">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Executive</p>
            <p class="text-xs text-secondary mb-0">Projects</p>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="badge badge-sm bg-gradient-success">Online</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
          </td>
          <td class="align-middle">
            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Edit
            </a>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">Michael Levi</h6>
                <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Programator</p>
            <p class="text-xs text-secondary mb-0">Developer</p>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="badge badge-sm bg-gradient-success">Online</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
          </td>
          <td class="align-middle">
            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Edit
            </a>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user5">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">Richard Gran</h6>
                <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Manager</p>
            <p class="text-xs text-secondary mb-0">Executive</p>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="badge badge-sm bg-gradient-secondary">Offline</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
          </td>
          <td class="align-middle">
            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Edit
            </a>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user6">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">Miriam Eric</h6>
                <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Programtor</p>
            <p class="text-xs text-secondary mb-0">Developer</p>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="badge badge-sm bg-gradient-secondary">Offline</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
          </td>
          <td class="align-middle">
            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Edit
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

@endsection
