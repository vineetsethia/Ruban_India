package com.example.arvind.ruben2;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.AppCompatButton;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

public class Login extends AppCompatActivity {

    private EditText inputEmail;
    private EditText inputPassword;

    private android.support.v7.widget.AppCompatButton btnLogin;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        inputEmail = (EditText) findViewById(R.id.email);
        inputPassword = (EditText) findViewById(R.id.password);
        btnLogin = (AppCompatButton) findViewById(R.id.btnLogin);

        btnLogin.setOnClickListener(new View.OnClickListener() {
            public void onClick(View view) {
                login();

            }
        });

    }
    public void login() {
        if (!validate()) {
            onLoginFailed("Invalid Input");
            return;
        }
        btnLogin.setEnabled(false);


        final String email = inputEmail.getText().toString();
        final String password = inputPassword.getText().toString();

        if(email.equals("admin@gmail.com") && password.equals("admin") )
        {
            Intent i = new Intent(Login.this, Dashboard.class);
            startActivity(i);

        }
        else
        {
            onLoginFailed("Invalid input");
        }

    }
    //login fails
    public void onLoginFailed(String msg ) {
        Toast.makeText(getBaseContext(), msg, Toast.LENGTH_LONG).show();
        btnLogin.setEnabled(true);
    }

        public boolean validate() {
            boolean valid = true;

            String email = inputEmail.getText().toString();
            String password = inputPassword.getText().toString();

            if (email.isEmpty() || !android.util.Patterns.EMAIL_ADDRESS.matcher(email).matches()) {
                inputEmail.setError("Enter a valid email address");
                valid = false;
            } else {
                inputEmail.setError(null);
            }

            if (password.isEmpty() || password.length() < 4 || password.length() > 20) {
                inputPassword.setError("Between 4 and 10 alphanumeric characters");
                valid = false;
            } else {
                inputPassword.setError(null);
            }

            return valid;
        }



    }


