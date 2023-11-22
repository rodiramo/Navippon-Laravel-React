import React, { useState, useEffect } from 'react';


function Activities( {activities} ) {
     return (
      <div>
        <h2>Activities</h2>
        {activities && activities.map((activity) => (
          <div key={activity.id}>
            <h3>{activity.name}</h3>
            <p>{activity.description}</p>
          </div>
        ))}
      </div>
    );
  }
  
  export default Activities;