import React, {useState} from 'react';
import { usePage } from '@inertiajs/react';
import NavBar from '../Components/NavBar';
import Footer from '../Components/Footer';
import Home from './Home/Home';
import Cities from './Cities/Cities';
import Activities from './Activities/Activities';

const Test = ( {cities, activities}) =>{

    return(
        <>
        <NavBar></NavBar>
        <Home></Home>
        <Cities cities={cities}></Cities>
        <Activities activities={activities} />
        <Footer></Footer>
        </>

    )

}

export default Test;

