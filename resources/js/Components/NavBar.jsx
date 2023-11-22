import React, {useState} from 'react'
import './navbar.css'
import '../../css/app.css'
import MenuIcon from '@mui/icons-material/Menu';
import CloseIcon from '@mui/icons-material/Close';
import logoWhite from '../../Assets/logo-white.png';

const NavBar = () => {

  const [active, setActive]  = useState('navBar')
  const showNav = ()=>{
      setActive('navBar activeNavbar')
  }
  const removeNav = ()=>{
      setActive('navBar')
  }
  
  const [transparent, setTransparent] = useState('header')
  const addBg = ()=>{
    if(window.scrollY >= 10){
      setTransparent('header activeHeader')
    }else{
      setTransparent('header')
    }
  }
  window.addEventListener('scroll', addBg)

  return (
    <div className='navBarSection'>
       <header className={transparent}>
        
          <div className="logoDiv">
            <a href="/" className="logo"><img className="logo-img" src={logoWhite} alt="Navippon Logo" />
        <span>Navippon</span></a>
          </div>

          <div className={active}>
            <ul onClick={removeNav} className="navLists flex">
              <li className="navItem">
                <a href="/" className="navLink">Home</a>
              </li>
              <li className="navItem">
                <a href="/about-us" className="navLink">About Us</a>
              </li>
              <li className="navItem">
                <a href="#" className="navLink">Discover</a>
               </li>
              <li className="navItem">
                <a href="#" className="navLink">Blog</a>
              </li>

              <li>
                <a href="/log-in"  data-aos="fade-up" data-aos-duration="3000" className="button button-full">Login</a>
              </li>

              <li>
                <a href="/sign-up"  data-aos="fade-up" data-aos-duration="3000" className="button button-empty">Sign Up</a>
              </li>
            </ul>
            <div onClick={removeNav} className="closeNavbar">
                <CloseIcon className='icon'/>
              </div>
          </div>

          <div onClick={showNav} className="toggleNavbar">
            <MenuIcon className='icon'/>
          </div>
       </header>
    </div>
  )
}

export default NavBar