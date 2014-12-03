#include <Servo.h> 
 
Servo myservo;  // create servo object to control a servo 
                // a maximum of eight servo objects can be created 
 
int pos = 0;    // variable to store the servo position 

int servo = 11;
int left = 9;
int right = 10;

void setup() 
{ 
  myservo.attach(servo);  // attaches the servo on pin 11 to the servo object 
  pinMode(left, INPUT);
  pinMode(right, INPUT);
} 
 
 
void loop() 
{

	if ((pos > 60) && (digitalRead(left) == HIGH)) {
		for (pos = 100; pos >= 60; pos -= 1) {
			myservo.write(pos);
			delay(10);
		}

	}

	if ((pos < 140) && (digitalRead(right) == HIGH)) {
		for (pos = 100; pos <= 140; pos += 1) {
			myservo.write(pos);
			delay(10);
		}

	}
}


