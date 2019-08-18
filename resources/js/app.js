/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import React, { Component } from 'react'
import ReactDOM from 'react-dom';
import {BrowserRouter,Route,Switch} from 'react-router-dom'
import Header from './components/Header'
import Sidebar from './components/Sidebar'
import Content from './components/Content';
import Footer from './components/Footer';
import ControlSidebar from './components/ControlSidebar';


class App extends Component {
    render() {
        return (

            <BrowserRouter>

                <div className="wrapper">
                    <Header />
                   

                    {/* // Content Wrapper. Contains page content */}
                    <div className="content-wrapper">
                        
                        <Switch>

                            <Route exact path='/react/dashboard' component={Content} />
                          
                        </Switch>

                        
                       
                    </div>




                   
                </div>

            </BrowserRouter>
        )
    };
}



require('./components/Example');

ReactDOM.render(<App />, document.getElementById('app'))
