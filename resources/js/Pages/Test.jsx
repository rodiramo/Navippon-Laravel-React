import React, {useState} from 'react';
import { usePage } from '@inertiajs/react';
import NavBar from '../Components/NavBar';
import Footer from '../Components/Footer';
import Home from './Home/Home';
import Activities from './Activities/Activities';
const Test = () =>{

    const { activities } = usePage().props;
    return(
        <div>
        <NavBar></NavBar>
        <Home></Home>
        <Footer></Footer>
        <Activities activities={activities} />
        </div>

    )

}

export default Test;

