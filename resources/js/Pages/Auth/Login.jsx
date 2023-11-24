import React, { useState } from "react";
import { router } from "@inertiajs/react";
import "./auth.css";

import logoWhite from "../../../Assets/logo-white.png";

const Login = () => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const handleEmailChange = (e) => {
    setEmail(e.target.value);
  };

  const handlePasswordChange = (e) => {
    setPassword(e.target.value);
  };

  const handleSubmit = (e) => {
    e.preventDefault();

    router.post(route("auth.processLogin"), { email, password });
  };

  return (
    <div className="display-flex">
      <div className="image-login">
        <a href="/">
          <img src={logoWhite} alt="Logo Navippon" className="logo" />
        </a>
      </div>

      <form className="form-login" onSubmit={handleSubmit}>
        {" "}
        <h1>Log In</h1>
        <div className="form-labels">
          <label htmlFor="email" className="form-label">
            Email
          </label>
          <input
            type="email"
            name="email"
            id="email"
            className="form-control"
            value={email}
            onChange={handleEmailChange}
          />
        </div>
        <div className="form-labels">
          <label htmlFor="password" className="form-label">
            Password
          </label>
          <input
            type="password"
            name="password"
            id="password"
            className="form-control"
            value={password}
            onChange={handlePasswordChange}
          />
        </div>
        <button type="submit" className="button">
          Log In
        </button>
      </form>
    </div>
  );
};

export default Login;
