import React from "react";
import ReactDOM from "react-dom";



import { createBrowserHistory } from "history";
import { Router, Route, Switch } from "react-router-dom";

import "assets/scss/material-kit-react.scss?v=1.9.0";

// pages for this product
import Components from "views/Components/Components.js";
import LandingPage from "views/LandingPage/LandingPage.js";
import ProfilePage from "views/ProfilePage/ProfilePage.js";
import LoginPage from "views/LoginPage/LoginPage.js";

import { StoreProvider } from "./globalState/Store";
import SetupWizard from "views/ProfilePage/SetupWizard copy";
import ProfilePagee from "./views/ProfilePage/ProfilePage copy";
import SetupWizardd from "./views/ProfilePage/SetupWizard copy";
var hist = createBrowserHistory();

ReactDOM.render(

<StoreProvider>
  <Router history={hist}>
    <Switch>
    <Route path="/SetupWizard-page" component={SetupWizardd} />
      <Route path="/landing-page" component={LandingPage} />
      <Route path="/profile-page" component={ProfilePagee} />
      <Route path="/" component={LoginPage} />
      
    </Switch>
  </Router>,
  </StoreProvider>,
  document.getElementById("root")
);
