// CityDetail.jsx
import React from "react";

const CityDetail = ({ city }) => {
  return (
    <div>
      <h2>{city.name}</h2>
      <div>
        <h3>Activities</h3>
        <ul>
          {city.activities.map((activity) => (
            <li key={activity.id}>{activity.name}</li>
          ))}
        </ul>
      </div>
      <div>
        <h3>Restaurants</h3>
        <ul>
          {city.restaurants.map((restaurant) => (
            <li key={restaurant.id}>{restaurant.name}</li>
          ))}
        </ul>
      </div>
    </div>
  );
};

export default CityDetail;
