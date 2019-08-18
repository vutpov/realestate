import React, { Component } from 'react';
import { Link } from 'react-router-dom';

const Header = () => (

    <header className="main-header">

        {/*  Logo  */}
        <Link to="/react/dashboard'" className="logo">
            {/*  mini logo for sidebar mini 50x50 pixels  */}
            <span className="logo-mini"><b>A</b>LT</span>
            {/*  logo for regular state and mobile devices  */}
            <span className="logo-lg"><b>Admin</b>LTE</span>
        </Link>

        {/*  Header Navbar  */}
        <nav className="navbar navbar-static-top" role="navigation">
            {/* Sidebar toggle button */}
            <Link to="#" className="sidebar-toggle" data-toggle="push-menu" role="button">
                <span className="sr-only">Toggle navigation</span>
            </Link>
            {/*  Navbar Right Menu  */}
            <div className="navbar-custom-menu">
                <ul className="nav navbar-nav">
                    {/*   Messages: style can be found in dropdown.less  */}
                    <li className="dropdown messages-menu">
                        {/* Menu toggle button */}
                        <Link to="#" className="dropdown-toggle" data-toggle="dropdown">
                            <i className="fa fa-envelope-o"></i>
                            <span className="label label-success">4</span>
                        </Link>
                        <ul className="dropdown-menu">
                            <li className="header">You have 4 messages</li>
                            <li>
                                {/*  inner menu: contains the messages  */}
                                <ul className="menu">
                                    <li>
                                        {/* start message  */}
                                        <Link to="#">
                                            <div className="pull-left">
                                                {/* User Image  */}
                                                <img src="dist/img/user2-160x160.jpg" className="img-circle" alt="User Image" />
                                            </div>
                                            {/*  Message title and timestamp  */}
                                            <h4>
                                                Support Team
                    <small><i className="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            {/* The message  */}
                                            <p>Why not buy a new awesome theme?</p>
                                        </Link>
                                    </li>
                                    {/*  end message  */}
                                </ul>
                                {/* .menu */}
                            </li>
                            <li className="footer"><Link to="#">See All Messages</Link></li>
                        </ul>
                    </li>
                    {/* messages-menu */}

                    {/* Notifications Menu  */}
                    <li className="dropdown notifications-menu">
                        {/* Menu toggle button */}
                        <Link to="#" className="dropdown-toggle" data-toggle="dropdown">
                            <i className="fa fa-bell-o"></i>
                            <span className="label label-warning">10</span>
                        </Link>
                        <ul className="dropdown-menu">
                            <li className="header">You have 10 notifications</li>
                            <li>
                                {/* Inner Menu: contains the notifications */}
                                <ul className="menu">
                                    <li>
                                        {/* start notification */}
                                        <Link to="#">
                                            <i className="fa fa-users text-aqua"></i> 5 new members joined today
                                        </Link>
                                    </li>
                                    {/* end notification  */}
                                </ul>
                            </li>
                            <li className="footer"><Link to="#">View all</Link></li>
                        </ul>
                    </li>
                    {/* Tasks Menu */}
                    <li className="dropdown tasks-menu">
                        {/* Menu Toggle Button --> */}
                        <Link to="#" className="dropdown-toggle" data-toggle="dropdown">
                            <i className="fa fa-flag-o"></i>
                            <span className="label label-danger">9</span>
                        </Link>
                        <ul className="dropdown-menu">
                            <li className="header">You have 9 tasks</li>
                            <li>
                                {/* Inner menu: contains the tasks */}
                                <ul className="menu">
                                    <li>
                                        {/* Task item */}
                                        <Link to="#">
                                            {/* Task title and progress text */}
                                            <h3>
                                                Design some buttons
                    <small className="pull-right">20%</small>
                                            </h3>
                                            {/* The progress bar */}
                                            <div className="progress xs">
                                                {/* Change the css width attribute to simulate progress */}
                                                <div className="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span className="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </Link>
                                    </li>
                                    {/*  end task item  */}
                                </ul>
                            </li>
                            <li className="footer">
                                <Link to="#">View all tasks</Link>
                            </li>
                        </ul>
                    </li>
                    {/* User Account Menu */}
                    <li className="dropdown user user-menu">
                        {/* Menu Toggle Button */}
                        <Link to="#" className="dropdown-toggle" data-toggle="dropdown">
                            {/* The user image in the navbar */}
                            <img src="dist/img/user2-160x160.jpg" className="user-image" alt="User Image" />
                            {/* hidden-xs hides the username on small devices so only the image appears. */}



                            <span className="hidden-xs">Alexandar Pierce</span>
                        </Link>
                        <ul className="dropdown-menu">
                            {/* The user image in the menu*/}
                            <li className="user-header">
                                <img src="dist/img/user2-160x160.jpg" className="img-circle" alt="User Image" />

                                <p>
                                    Alexandar Pierce - Web Developer
              <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            {/*  Menu Body*/}
                            <li className="user-body">
                                <div className="row">
                                    <div className="col-xs-4 text-center">
                                        <Link to="#">Followers</Link>
                                    </div>
                                    <div className="col-xs-4 text-center">
                                        <Link to="#">Sales</Link>
                                    </div>
                                    <div className="col-xs-4 text-center">
                                        <Link to="#">Friends</Link>
                                    </div>
                                </div>
                                {/* row */}
                            </li>
                            {/* Menu Footer */}
                            <li className="user-footer">
                                <div className="pull-left">
                                    <Link to="#" className="btn btn-default btn-flat">Profile</Link>
                                </div>
                                <div className="pull-right">
                                    <Link to="/react/logout')" className="btn btn-default btn-flat">Sign out</Link>
                                </div>
                            </li>
                        </ul>
                    </li>
                    {/* Control Sidebar Toggle Button */}
                    <li>
                        <Link to="#" data-toggle="control-sidebar"><i className="fa fa-gears"></i></Link>
                    </li>
                </ul>
            </div>
        </nav>
    </header >





)

export default Header;