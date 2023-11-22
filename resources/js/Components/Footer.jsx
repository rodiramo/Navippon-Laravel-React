import React, {useEffect} from 'react'
import './footer.css'
import logoWhite from '../../Assets/logo-white.png';
import '../../css/app.css'
// import AOS ============================>
import Aos from 'aos'
import 'aos/dist/aos.css'
  
 const Footer = () => {
  useEffect(()=>{
    Aos.init({duration: 2000})
  }, []) 

   return (
     <div className='footer'>
        <div className='secContainer'>
         <div data-aos="fade-up" data-aos-duration="2000" className="logoDiv">
         <div className="footerLogo">
            <a href="#" className="logo flex"><img className="logo-img" src={logoWhite} alt="Navippon Logo" /><span>Navippon</span></a>
          </div>
         </div>
         <div data-aos="fade-up" data-aos-duration="2500" className="footerLinks">
          <span className="linkTitle">Information</span>
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Explore</a>
            </li>
            <li>
              <a href="#">Travel</a>
            </li>
            <li>
              <a href="#">Blog</a>
            </li>
          
         </div>
         <div data-aos="fade-up" data-aos-duration="3000" className="footerLinks">
          <span className="linkTitle">Helpful Links</span>
            <li>
              <a href="#">Destination</a>
            </li>
            <li>
              <a href="#">Support</a>
            </li>
            <li>
              <a href="#">Travel & Condition</a>
            </li>
            <li>
              <a href="#">Privacy</a>
            </li>
          
         </div>
         <div data-aos="fade-up" data-aos-duration="3500" className="footerLinks">
          <span className="linkTitle">Contact</span>
           <span className='phone'>+651 125 658</span>
           <span className="email">isratech8@gmail.com</span>
          
       
         </div>
         </div>
     </div>
   )
 }
 
 export default Footer