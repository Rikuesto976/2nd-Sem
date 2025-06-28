#include <iostream>
using namespace std;
int main()
{
    float total=100;
    float &ref=total;
    cout<<total<<"\t"<<ref<<endl;
    total=total+10;
    cout<<"__________________"<<endl;
    cout<<total<<"\t"<<ref<<endl;
    return 0;
}
