                                //  TO CONVERT HOURS TO MINUTES USING CASTING OPERATOR
#include <iostream>
using namespace std;
class Minutes
{
        float min;
    public:
        Minutes()
        {
            min =0;
        }
        Minutes(float x)
        {
            min=x;
        }
        void display_M()
        {
            cout<<"Total Minutes: "<<min<<endl;
        }
};
class Hour
{
        float hr;
    public: 
        Hour()
        {
            hr =0;
        }
        Hour(float y)
        {
            hr =y;
        }
        void display_H()
        {
            cout<<"Hours: "<<hr<<endl;
        }

        operator Minutes()
        {
            int min;
            min = hr*60;
            Minutes m(min);
            return m;
        }
};
int main()
{
    Hour h(.5);
    Minutes m;
    m =h;
    h.display_H();
    m.display_M();
}