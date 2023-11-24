// Cities.jsx
import React from "react";
import { Link } from "@inertiajs/react";
import "./cities.css";
import CityDetail from "./CityDetail";

const Cities = ({ cities }) => {
  return (
    <>
      <div className="cities-home">
        <h2>Discover by Cities</h2>
        <div className="cities">
          {cities.map((city) => (
            <div className="city-home" key={city.city_id}>
              <Link className="link" href={`/Cities/${city.city_id}`}>
                {city.name}
              </Link>
              <div>
                <span>
                  Activities: {city.activities_count}, Restaurants:{" "}
                  {city.restaurants_count}
                </span>
              </div>
            </div>
          ))}
        </div>
      </div>
    </>
  );
};

export default Cities;
