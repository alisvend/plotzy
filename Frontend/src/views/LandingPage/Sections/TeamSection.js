import React from "react";
// nodejs library that concatenates classes
import classNames from "classnames";
// @material-ui/core components
import { makeStyles } from "@material-ui/core/styles";

// @material-ui/icons

// core components
import GridContainer from "components/Grid/GridContainer.js";
import GridItem from "components/Grid/GridItem.js";

import Card from "components/Card/Card.js";
import CardBody from "components/Card/CardBody.js";
import CardFooter from "components/Card/CardFooter.js";

import styles from "assets/jss/material-kit-react/views/landingPageSections/teamStyle.js";



const useStyles = makeStyles(styles);

export default function TeamSection() {
  const classes = useStyles();
 
  return (
    <div className={classes.section}>
      <h2 className={classes.title}></h2>
      <div>
        <GridContainer>
          <GridItem xs={12} sm={12} md={4}>
            <Card plain>
              <GridItem xs={12} sm={12} md={6} className={classes.itemGrid}>
               
              </GridItem>
              <h4 className={classes.cardTitle}>
                
                <br />
                <small className={classes.smallTitle}></small>
              </h4>
              <CardBody>
                <p className={classes.description}>
                 
                </p>
              </CardBody>
              <CardFooter className={classes.justifyCenter}>
                
              </CardFooter>
            </Card>
          </GridItem>
          <GridItem xs={12} sm={12} md={4}>
            <Card plain>
              <GridItem xs={12} sm={12} md={6} className={classes.itemGrid}>
               
              </GridItem>
              <h4 className={classes.cardTitle}>
             
                <br />
              </h4>
              <CardBody>
                <p className={classes.description}>
                 
                </p>
              </CardBody>
              <CardFooter className={classes.justifyCenter}>
                
              </CardFooter>
            </Card>
          </GridItem>
          <GridItem xs={12} sm={12} md={4}>
            <Card plain>
              <GridItem xs={12} sm={12} md={6} className={classes.itemGrid}>
               
              </GridItem>
              <h4 className={classes.cardTitle}>
               
                <br />
                <small className={classes.smallTitle}></small>
              </h4>
              <CardBody>
                <p className={classes.description}>
                
                </p>
              </CardBody>
              <CardFooter className={classes.justifyCenter}>
                
              </CardFooter>
            </Card>
          </GridItem>
        </GridContainer>
      </div>
    </div>
  );
}
