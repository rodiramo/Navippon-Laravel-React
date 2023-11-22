import React, { useState, useEffect } from 'react';
import './activities.css'
import '../../../css/app.css'

function Activities( {activities} ) {
     return (
      <section className='activities'>
        <h2>Activities</h2>
        
        {activities && activities.map((activity) => (
          <div className='cardActivity' key={activity.id}>
            <h3>{activity.name}</h3>
            <p>{activity.description}</p>
          </div>
        ))}
      </section>
    );
  }
  
  export default Activities;