import React from 'react'
import { Link } from 'react-router';

const Sidebar = () => (
    <aside className="main-sidebar">

        {/* sidebar: style can be found in sidebar.less */}
        <section className="sidebar">

            {/* Sidebar user panel (optional) */}
            <div className="user-panel">
                <div className="pull-left image">
                    <img src="dist/img/user2-160x160.jpg" className="img-circle" alt="User Image" />
                </div>
                <div className="pull-left info">
                    <p>Alexander Pierce</p>
                    {/* Status */}
                    <Link to="#"><i className="fa fa-circle text-success"></i> Online</Link>
                </div>
            </div>



            {/* Sidebar Menu */}
            <ul className="sidebar-menu" data-widget="tree">

                <li className="treeview">
                    <Link to="#"><i className="fa fa-link"></i><span>Dashboard</span>

                    </Link>
                </li>

                <li className="treeview">
                    <Link to="#"><i className="fas fa-project-diagram"></i> <span>Project</span>
                        <span className="pull-right-container">
                            <i className="fa fa-angle-left pull-right"></i>
                        </span>
                    </Link>
                    <ul className="treeview-menu">
                        <li><Link to="/system/createProject">Add New Project</Link></li>
                        <li><Link to="/system/project">View All Projects</Link></li>
                    </ul>
                </li>


                <li className="treeview">
                    <Link to="#"><i className="fas fa-home"></i> <span>Property</span>
                        <span className="pull-right-container">
                            <i className="fa fa-angle-left pull-right"></i>
                        </span>
                    </Link>
                    <ul className="treeview-menu">
                        <li><Link to="/system/createProperty">Add New Property</Link></li>
                        <li><Link to="/system/property">View All Properties</Link></li>
                        <li><Link to="/system/createPropAttribute">Add New Property Attribute</Link></li>
                        <li><Link to="/system/propAttribute">View All Property Attributes</Link></li>
                        <li><Link to="/system/createPropTypes">Add New Property Types</Link></li>
                        <li><Link to="/system/PropTypes">View All Property Types</Link></li>
                    </ul>
                </li>


                <li className="treeview">
                    <Link to="#"><i className="fas fa-bookmark"></i><span>Booking</span>
                        <span className="pull-right-container">
                            <i className="fa fa-angle-left pull-right"></i>
                        </span>
                    </Link>
                    <ul className="treeview-menu">
                        <li><Link to="/system/createBook">Add New Booking</Link></li>
                        <li><Link to="/system/book">View All Booking</Link></li>
                    </ul>
                </li>

                <li className="treeview">
                    <Link to="#"><i className="fas fa-file-signature"></i><span>Contract</span>
                        <span className="pull-right-container">
                            <i className="fa fa-angle-left pull-right"></i>
                        </span>
                    </Link>
                    <ul className="treeview-menu">
                        <li><Link to="/system/createContract">Add New Contract</Link></li>
                        <li><Link to="/system/contract">View All Contracts</Link></li>
                    </ul>
                </li>

                <li className="treeview">
                    <Link to="#"><i className="fas fa-dollar-sign"></i><span>Payment</span>
                        <span className="pull-right-container">
                            <i className="fa fa-angle-left pull-right"></i>
                        </span>
                    </Link>
                    <ul className="treeview-menu">
                        <li><Link to="/system/createPaymentBook">Add New Payment(Book)</Link></li>
                        <li><Link to="/system/createPaymentInstallment">Add New Payment(Installment)</Link></li>
                        <li><Link to="/system/payment">View All Payment</Link></li>
                    </ul>
                </li>


                <li className="treeview">
                    <Link to="#"><i className="fa fa-link"></i> <span>CRM</span>
                        <span className="pull-right-container">
                            <i className="fa fa-angle-left pull-right"></i>
                        </span>
                    </Link>
                    <ul className="treeview-menu">
                        <li><Link to="#">Add New Opportunity</Link></li>
                        <li><Link to="#">View All Opportunities</Link></li>
                    </ul>
                </li>

                <li className="treeview">
                    <Link to="#"><i className="fas fa-handshake"></i><span>Customer</span>
                        <span className="pull-right-container">
                            <i className="fa fa-angle-left pull-right"></i>
                        </span>
                    </Link>
                    <ul className="treeview-menu">
                        <li><Link to="/system/createCustomer">Add New Customer</Link></li>
                        <li><Link to="/system/customer">View All Customers</Link></li>
                    </ul>
                </li>

                <li className="treeview">
                    <Link to="#"><i className="fas fa-handshake"></i><span>Partner</span>
                        <span className="pull-right-container">
                            <i className="fa fa-angle-left pull-right"></i>
                        </span>
                    </Link>
                    <ul className="treeview-menu">
                        <li><Link to="/system/createPartner">Add New Partner</Link></li>
                        <li><Link to="/system/partner">View All Partners</Link></li>

                        <li><Link to="/system/createPartnerType">Add New Partner Type</Link></li>
                        <li><Link to="/system/partnerType">View All Partner Types</Link></li>
                    </ul>
                </li>

                <li className="treeview">
                    <Link to="#"><i className="fa fa-user-tie"></i><span>Agency</span>
                        <span className="pull-right-container">
                            <i className="fa fa-angle-left pull-right"></i>
                        </span>
                    </Link>
                    <ul className="treeview-menu">
                        <li><Link to="/system/createAgency">Add New Agency</Link></li>
                        <li><Link to="/system/agency">View All Agencies</Link></li>

                        <li><Link to="/system/createAgencyType">Add New Agency Type</Link></li>
                        <li><Link to="/system/agencyType">View All Agency Types</Link></li>
                    </ul>
                </li>

                <li className="treeview">
                    <Link to="#"><i className="fa fa-users"></i> <span>Staff</span>
                        <span className="pull-right-container">
                            <i className="fa fa-angle-left pull-right"></i>
                        </span>
                    </Link>
                    <ul className="treeview-menu">
                        <li><Link to="/system/createStaff">Add New Staff</Link></li>
                        <li><Link to="/system/staff">View All Staffs</Link></li>
                    </ul>
                </li>

                <li className="treeview">
                    <Link to="#"><i className="fa fa-users"></i><span>User</span>
                        <span className="pull-right-container">
                            <i className="fa fa-angle-left pull-right"></i>
                        </span>
                    </Link>
                    <ul className="treeview-menu">
                        <li><Link to="/system/createUser">Add New User</Link></li>
                        <li><Link to="/system/user">View All Users</Link></li>
                    </ul>
                </li>

            </ul>
            {/* sidebar-menu */}
        </section>
        {/* sidebar */}
    </aside>
)

export default Sidebar