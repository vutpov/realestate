import React, { Component } from 'react';
import { Link } from 'react-router-dom';

const Footer = () => (

    <footer className="main-footer">
      {/* To the right */}
      <div className="pull-right hidden-xs">
        Anything you want
      </div>
      {/*  Default to the left */}
      <strong>Copyright &copy; 2016 <Link to="">Company</Link>.</strong> All rights reserved.
    </footer>

);

export default Footer;