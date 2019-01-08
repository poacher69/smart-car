package com.wjs.httpmycar1;

import android.app.Activity;
import android.content.Context;
import android.content.pm.ActivityInfo;
import android.os.AsyncTask;
import android.os.Bundle;
import android.util.Log;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageButton;
import android.widget.TextView;
import android.widget.Toast;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;

public class MainActivity extends Activity {

    private TextView textViewRtnTxt;
    private ImageButton btnForward, btnLeft, btnRight, btnBackward, btnStop;
    private final String TAG="For Mydatabases";
    private final int HOME = 0;
    private final int FORWARD = 1;
    private final int BACKWARD = 2;
    private final int LEFTTURN = 3;
    private final int RIGHTTURN = 4;
    private final int CARSTOP = 5;
    private int actionFlag;
    Context context=this;

    private StringBuilder sqlURL;
    private String webAddress = "http://192.168.58.138:5000/";
    private String goForward = "forward";
    private String goBackward = "backward";
    private String turnLeft = "left";
    private String turnRight = "right";
    private String stopCar = "stop";

    private URL url;
    private Button btnStart, btnExit;
    private CarSQLData myActionData;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


        setRequestedOrientation(ActivityInfo.SCREEN_ORIENTATION_PORTRAIT);
        setTitle("HttpMyCar1");

        textViewRtnTxt = (TextView) findViewById(R.id.textView_LastAction);
        textViewRtnTxt.setText("Http Return Text.");

        btnForward = (ImageButton) findViewById(R.id.imageButton_Forward);
        btnLeft = (ImageButton) findViewById(R.id.imageButton_Left);
        btnRight = (ImageButton) findViewById(R.id.imageButton_Right);
        btnBackward = (ImageButton) findViewById(R.id.imageButton_Backward);
        btnStop = (ImageButton) findViewById(R.id.imageButton_Stop);
/*
        btnForward.setOnClickListener(new myClick());
        btnBackward.setOnClickListener(new myClick());
        btnLeft.setOnClickListener(new myClick());
        btnRight.setOnClickListener(new myClick());

        btnStop.setOnClickListener(new myClick());
*/

        btnForward.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                actionFlag = FORWARD;
                Toast.makeText(context, "GO FORWARD", Toast.LENGTH_SHORT).show();
                myActionData = new CarSQLData();
                myActionData.execute();
            }
        });

        btnBackward.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                actionFlag = BACKWARD;
                Toast.makeText(context, "GO BACKWARD", Toast.LENGTH_SHORT).show();
                myActionData = new CarSQLData();
                myActionData.execute();
            }
        });

        btnLeft.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                actionFlag = LEFTTURN;
                Toast.makeText(context, "TURN LEFT", Toast.LENGTH_SHORT).show();
                myActionData = new CarSQLData();
                myActionData.execute();
            }
        });

        btnRight.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                actionFlag = RIGHTTURN;
                Toast.makeText(context, "TURN RIGHT", Toast.LENGTH_SHORT).show();
                myActionData = new CarSQLData();
                myActionData.execute();
            }
        });

        btnStop.setOnClickListener(new View.OnClickListener() {
           @Override
           public void onClick(View v) {
               actionFlag = CARSTOP;
               Toast.makeText(context, "STOP CAR", Toast.LENGTH_SHORT).show();
               myActionData = new CarSQLData();
               myActionData.execute();
           }
        });

        btnStart = (Button) findViewById(R.id.buttonStart);
        btnExit = (Button) findViewById(R.id.buttonExit);

        actionFlag = HOME;

    } // onCreate()

/*
    private class myClick implements View.OnClickListener {
        @Override
        public void onClick(View v) {
            switch(v.getId()){
                case R.id.imageButton_Forward:
                    actionFlag = FORWARD;
                    Toast.makeText(context, "GO FORWARD", Toast.LENGTH_SHORT).show();
                    break;
                case R.id.imageButton_Backward:
                    actionFlag = BACKWARD;
                    Toast.makeText(context, "GO BACKWARD", Toast.LENGTH_SHORT).show();
                    break;
                case R.id.imageButton_Left:
                    actionFlag = LEFTTURN;
                    Toast.makeText(context, "TURN LEFT", Toast.LENGTH_SHORT).show();
                    break;
                case R.id.imageButton_Right:
                    actionFlag = RIGHTTURN;
                    Toast.makeText(context, "TURN RIGHT", Toast.LENGTH_SHORT).show();
                    break;
                case R.id.imageButton_Stop:
                    actionFlag = CARSTOP;
                    Toast.makeText(context, "STOP CAR", Toast.LENGTH_SHORT).show();
                    break;
                default:
                    actionFlag = HOME;
                    Toast.makeText(context, "HOME PAGE", Toast.LENGTH_SHORT).show();
                    break;
            }
        }
        myActionData = new CarSQLData();
		myActionData.execute();
    } // end of myClick(), button click
*/

    private class CarSQLData extends AsyncTask<Void, Void, String> {
        @Override
        protected String doInBackground(Void... voids) {
            String data = null;

            sqlURL = new StringBuilder();
            sqlURL.append(webAddress);

            switch (actionFlag) {
                case FORWARD:
                    sqlURL.append(goForward);
                    break;
                case BACKWARD:
                    sqlURL.append(goBackward);
                    break;
                case LEFTTURN:
                    sqlURL.append(turnLeft);
                    break;
                case RIGHTTURN:
                    sqlURL.append(turnRight);
                    break;
                case CARSTOP:
                    sqlURL.append(stopCar);
                    break;
                case HOME:
                default:
                    break;

            }

            try
            {
                url = new URL(sqlURL.toString());
                Log.d(TAG, "url = " + url);
                HttpURLConnection conn = (HttpURLConnection) url.openConnection();
                conn.setRequestMethod("GET");

                int code = conn.getResponseCode();
                Log.d(TAG, "code = " + code);
                if (code == HttpURLConnection.HTTP_OK) {
                    InputStream input = conn.getInputStream();
                    InputStreamReader reader = new InputStreamReader(input);

                    char[] buffer = new char[100];
                    reader.read(buffer);
                    data = String.valueOf(buffer);
                    input.close();

                }
            } catch (MalformedURLException e) {
                e.printStackTrace();
            } catch (IOException e) {
                e.printStackTrace();
            }

            return data;
        }

        @Override
        protected void onPostExecute (String s){
            super.onPostExecute(s);
            textViewRtnTxt.setText(s);

        }
    }
}
