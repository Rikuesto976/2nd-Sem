                            //CLASS TYPE TO BASIC TYPE
#include <iostream>
using namespace std;
class Time
{
    private:
        int hrs, mins;
    public: 
        Time()
            {
                hrs=0, mins=0;
            }
        Time(int x, int y)
            {
                hrs= x;
                mins = y;
            }

        operator int()
            {
                int duration;
                duration = hrs*60 + mins;
                return duration;
            }
        void display()
            {
                cout<<"Hours: "<<hrs<<endl;
                cout<<"Minutes: "<<mins<<endl;
            }
};

int main()
{
    Time t1(1, 25);
    int duration;
    t1.display();
    duration = t1;
    cout<<"Total Time: "<<duration<<endl;
}