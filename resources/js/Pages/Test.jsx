import React, {useState} from 'react';
import { usePage } from '@inertiajs/react';
import NavBar from '../Components/NavBar';
import Footer from '../Components/Footer';
import Home from './Home/Home';
import Activities from './Activities/Activities';
const Test = () =>{

    const { activities } = usePage().props;
    return(
        <>
        <NavBar></NavBar>
        <Home></Home>
        <Activities activities={activities} />
        <Footer></Footer>
        </>

    )

}

export default Test;

