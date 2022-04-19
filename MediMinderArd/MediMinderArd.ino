#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x27, 20, 4);
const char* ssid = "Pranay";
const char* password = "pranay123";
const int led1 = D4, led2 = D5, led3 = D6, led4 = D7, buzzer = D0;
const int sw = D8;
int swStatus,flag=0;
void setup()
{
  Serial.begin(9600);
  pinMode(led1, OUTPUT);
  pinMode(led2, OUTPUT);
  pinMode(led3, OUTPUT);
  pinMode(led4, OUTPUT);
  pinMode(buzzer, OUTPUT);
  pinMode(sw, INPUT_PULLUP);
  lcd.init();
  lcd.backlight();
  lcd.clear();
  lcd.setCursor(0, 0);
  lcd.print("CONNECTING");
  lcd.setCursor(0, 1);
  lcd.print("TO WiFi...");
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting..");
  }
  lcd.clear();
  lcd.setCursor(0, 0);
  lcd.print("CONNECTED");
  lcd.setCursor(0, 1);
  lcd.print("TO WiFi...");
  delay(2000);
}
void loop() {
  if (WiFi.status() == WL_CONNECTED)
  { 
    lcd.clear();
    lcd.setCursor(0, 0);
    lcd.print("MediMinder");
    lcd.setCursor(0, 1);
    lcd.print("STATUS ONLINE");
    HTTPClient http;
    http.begin("http://mediminder.000webhostapp.com/test.php");
    int httpCode = http.GET();
    swStatus = digitalRead(sw);
    if (httpCode > 0)
    {
      String value = http.getString();
      Serial.println(value);
      if (value[0] == '1')
      {
        digitalWrite(led1, HIGH);
        flag = 1;
        
        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("MEDICINE TIME");
        lcd.setCursor(0, 1);
        lcd.print("KINDLY TAKE MEDS");        
      }
      else if (value[0] == '0')
      {
        digitalWrite(led1, LOW);
      }
      if (value[1] == '1')
      {
        digitalWrite(led2, HIGH);
        flag = 1;
        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("MEDICINE TIME");
        lcd.setCursor(0, 1);
        lcd.print("KINDLY TAKE MEDS");
      }
      else if (value[1] == '0')
      {
        digitalWrite(led2, LOW);
      }
      if (value[2] == '1')
      {
        digitalWrite(led3, HIGH);
        flag = 1;
        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("MEDICINE TIME");
        lcd.setCursor(0, 1);
        lcd.print("KINDLY TAKE MEDS");
      }
      else if (value[2] == '0')
      {
        digitalWrite(led3, LOW);
      }
      if (value[3] == '1')
      {
        digitalWrite(led4, HIGH);
        flag = 1;
        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("MEDICINE TIME");
        lcd.setCursor(0, 1);
        lcd.print("KINDLY TAKE MEDS");
      }
      else if (value[3] == '0')
      {
        digitalWrite(led4, LOW);
      }

      if(flag == 1)
      {
        if(swStatus == 0)
        {
          digitalWrite(buzzer,HIGH);
          flag=0;          
        }
        if(swStatus == 1)
        {
          digitalWrite(buzzer,LOW);
          delay(60000);
        }
      }

      
    }
    http.end();
  }
  else
  {
    lcd.clear();
    lcd.setCursor(0, 0);
    lcd.print("MediMinder");
    lcd.setCursor(0, 1);
    lcd.print("STATUS OFFLINE");
  }
}
