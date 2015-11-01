package com.example.arvind.ruben2;

import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.NavigationView;
import android.support.design.widget.Snackbar;
import android.support.v4.app.ActionBarDrawerToggle;
import android.support.v4.app.FragmentManager;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.MenuItem;
import android.view.View;
import android.widget.Toast;
import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentTransaction;
import android.support.v4.widget.DrawerLayout;

public class Dashboard extends AppCompatActivity {

    private NavigationView navigationView;
    DrawerLayout mDrawerLayout;
    FragmentManager mFragmentManager;
    FragmentTransaction mFragmentTransaction;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_dashboard);

        //Initializing NavigationView
        navigationView = (NavigationView) findViewById(R.id.nav);
        mDrawerLayout = (DrawerLayout) findViewById(R.id.drawerLayout);

        Bundle bundle=new Bundle();
        final WhatFragment w = new WhatFragment();

        mFragmentManager = getSupportFragmentManager();
        mFragmentTransaction = mFragmentManager.beginTransaction();
        w.setArguments(bundle);
        mFragmentTransaction.replace(R.id.containerView,w).commit();

        navigationView.setNavigationItemSelectedListener(new NavigationView.OnNavigationItemSelectedListener() {

            // This method will trigger on item Click of navigation menu
            @Override
            public boolean onNavigationItemSelected(MenuItem menuItem) {

                //Closing drawer on item click
                mDrawerLayout.closeDrawers();



                //Check to see which item was being clicked and perform appropriate action
                switch (menuItem.getItemId()){

                    case R.id.welcome:
                        FragmentTransaction fragmentTransaction = mFragmentManager.beginTransaction();
                        fragmentTransaction.replace(R.id.containerView,new WhatFragment()).commit();

                    case R.id.voice_To_text:

                        Intent i = new Intent(Dashboard.this, Voice_to_text.class);
                        startActivity(i);
                        return true;
                    case R.id.e_cart:
                        Intent e = new Intent(Dashboard.this,Ecart.class);
                        startActivity(e);
                        return true;
                    case R.id.logout:
                        Intent j = new Intent(Dashboard.this,Login.class);
                        startActivity(j);
                        return true;
                     default:
                        Toast.makeText(getApplicationContext(),"Somethings Wrong",Toast.LENGTH_SHORT).show();
                        return true;

                }
            }
        });
        android.support.v7.widget.Toolbar tool_bar = (android.support.v7.widget.Toolbar) findViewById(R.id.toolbar);
        android.support.v7.app.ActionBarDrawerToggle mDrawerToggle = new android.support.v7.app.ActionBarDrawerToggle(this,mDrawerLayout, tool_bar,R.string.app_name, R.string.app_name);
        mDrawerLayout.setDrawerListener(mDrawerToggle);
        mDrawerToggle.syncState();


    }

}
