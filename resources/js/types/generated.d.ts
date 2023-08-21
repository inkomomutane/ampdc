declare namespace App.Data {
export type DistrictData = {
id: number | null;
name: string | null;
province: any | any | null;
};
export type NeighborhoodData = {
id: number | null;
name: string | null;
district: any | App.Data.DistrictData | null;
};
export type OrganizationData = {
id: number | null;
name: string | null;
services: string | null;
};
export type StatusData = {
id: number | null;
status: string | null;
victim: any | App.Data.VictimData | null;
organization: any | App.Data.OrganizationData | null;
};
export type VictimData = {
id: number | null;
name: string | null;
contact: string | null;
violence_description: string | null;
age: number | null;
organization: any | App.Data.OrganizationData | null;
violence: any | App.Data.ViolenceTypeData | null;
neighborhood: any | App.Data.NeighborhoodData | null;
statuses: Array<App.Data.StatusData> | null;
};
export type ViolenceTypeData = {
id: number | null;
name: string | null;
};
}
