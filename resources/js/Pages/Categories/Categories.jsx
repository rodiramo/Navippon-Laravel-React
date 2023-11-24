// Categories.jsx
import React from "react";
import { Link } from "@inertiajs/react";
import "./categories.css";

const Categories = ({ categories }) => {
  return (
    <>
      <div className="categories-home">
        <h2>Discover by Categories</h2>
        <div className="categories">
          {categories &&
            categories.map((category) => (
              <div className="category" key={category.category_id}>
                <Link
                  className="link"
                  href={`/categories/${category.category_id}`}
                >
                  {category.name}
                </Link>
              </div>
            ))}
        </div>
      </div>
    </>
  );
};

export default Categories;
