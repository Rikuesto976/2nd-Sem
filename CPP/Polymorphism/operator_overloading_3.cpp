                    //TO CONCATENATE TWO STRINGS BY OVERLOADING '+' OPERATOR (s3 = s1 + s2)
#include <iostream>
#include <cstring>
using namespace std;
class String
{
        char name[40];
    public: 
        String()
            {
                strcpy(name, " ");
                 
            }
        String( char *c)
            {
                strcpy(name, c);
            }
        friend String operator +(String &s1, String &s2);
        
        void display()
        {
            cout<<name<<endl;
        }
};

String operator +(String &s1, String &s2)
        {
            String temp;
            strcpy(temp.name, s1.name);
            strcat(temp.name, s2.name);
            return temp;
        }

int main()
{
    String s1("Anurodh"), s2(" Kanth"), s3;
    s3 = s1 + s2;
    s3.display();
    return 0;

}