<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset("admin/dist/img/avatar.png")}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">


        <p>{{Auth::User()->currentStaff()->name}}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>



    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">

      <li class="">
        <a href="{{route('dashboard')}}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span>

        </a>
      </li>

      <li class="treeview">
        <a href="#"><i class="fas fa-project-diagram"></i> <span>Project</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/system/createProject">Add New Project</a></li>
          <li><a href="/system/project">View All Projects</a></li>
        </ul>
      </li>


      <li class="treeview">
        <a href="#"><i class="fas fa-home"></i> <span>Property</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/system/createProperty">Add New Property</a></li>
          <li><a href="/system/property">View All Properties</a></li>
          <li><a href="/system/createPropAttribute">Add New Property Attribute</a></li>
          <li><a href="/system/propAttribute">View All Property Attributes</a></li>
          <li><a href="/system/createPropTypes">Add New Property Types</a></li>
          <li><a href="/system/PropTypes">View All Property Types</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-address-card"></i><span>Address</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('system/cities')}}">Add New Cities</a></li>
          <li><a href="{{url('/system/addcities') }}">View All Cities</a></li>

          <li><a href="{{url('system/addstateprovince')}}">Add New StateProvince</a></li>
          <li><a href="{{url('/system/viewstatprovince') }}">View All StateProvince</a></li>

          <li><a href="{{url('system/addlocation')}}">Add New LocationInfo</a></li>
          <li><a href="{{url('/system/viewlocation') }}">View All LocationInfo</a></li>
        </ul>
      </li>


      <li class="treeview">
        <a href="#"><i class="fas fa-bookmark"></i><span>Booking</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/system/createBook">Add New Booking</a></li>
          <li><a href="/system/book">View All Booking</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fas fa-file-signature"></i><span>Contract</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/system/createContract">Add New Contract</a></li>
          <li><a href="/system/contract">View All Contracts</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fas fa-calendar-alt"></i><span>Schedule</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">

          <li><a href="{{route("schedule")}}">View All Schedule</a></li>
          <li><a href="{{route("test")}}">Test</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fas fa-dollar-sign"></i><span>Payment</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          {{-- <li><a href="/system/createPaymentBook">Add New Payment(Book)</a></li>
          <li><a href="/system/createPaymentInstallment">Add New Payment(Installment)</a></li> --}}
          <li><a href="/system/payment">View All Payment</a></li>
        </ul>
      </li>


      <li class="treeview">
        <a href="#"><i class="fas fa-handshake"></i><span>Customer</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/system/createCustomer">Add New Customer</a></li>
          <li><a href="/system/customer">View All Customers</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fas fa-handshake"></i><span>Partner</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/system/createPartner">Add New Partner</a></li>
          <li><a href="/system/partner">View All Partners</a></li>

          <li><a href="/system/createPartnerType">Add New Partner Type</a></li>
          <li><a href="/system/partnerType">View All Partner Types</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-user-tie"></i><span>Agency</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/system/createAgency">Add New Agency</a></li>
          <li><a href="/system/agency">View All Agencies</a></li>

          <li><a href="/system/createAgencyType">Add New Agency Type</a></li>
          <li><a href="/system/agencyType">View All Agency Types</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-users"></i> <span>Staff</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/system/createStaff">Add New Staff</a></li>
          <li><a href="/system/staff">View All Staffs</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-users"></i><span>User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/system/createUser">Add New User</a></li>
          <li><a href="/system/user">View All Users</a></li>
        </ul>
      </li>



    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>