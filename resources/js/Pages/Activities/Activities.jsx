import React, { useState, useEffect } from "react";

const Activities = ({ activities, auth }) => (
  <div>
    <header>
      <h1>Activities</h1>
    </header>

    <div className="container">
      <div className="cards">
        {activities &&
          activities.map((activity) => (
            <div className="card activities" key={activity.id}>
              <div className="card_img card1">
                <img src={activity.image} alt={activity.title} />
              </div>
              <h3>{activity.title}</h3>
              <p>{activity.description}</p>
              <a href={`/${activity.id}`} className="button-35">
                View More
              </a>

              {/* Authenticated actions */}
              <div className="actions">
                <form action={`/favorite/${activity.id}`} method="post">
                  <input type="hidden" name="_token" />
                  <button type="submit" className="btn btn-primary mb-2">
                    Favourite
                  </button>
                </form>

                {/* Admin actions */}
                {auth && auth.user && auth.user.role_id === 1 && (
                  <div className="d-flex justify-content-between gap-1">
                    <a
                      href={`/edit/${activity.id}`}
                      className="btn btn-secondary"
                    >
                      Edit
                    </a>
                    <a
                      href={`/delete/${activity.id}`}
                      className="btn btn-danger"
                    >
                      Delete
                    </a>
                  </div>
                )}
              </div>
            </div>
          ))}
      </div>
    </div>
  </div>
);
export default Activities;
