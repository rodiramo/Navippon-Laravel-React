import React, { useState } from "react";
import { router } from "@inertiajs/react";

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
    <div>
      <header className="smaller-header">
        <h1>Log In</h1>
      </header>
      <form className="form-login" onSubmit={handleSubmit}>
        <div className="mb-3 d-flex align-items-start flex-column">
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
        <div className="mb-3 d-flex align-items-start flex-column">
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
        <button type="submit" className="button-login w-100">
          Log In
        </button>
      </form>
    </div>
  );
};

export default Login;
