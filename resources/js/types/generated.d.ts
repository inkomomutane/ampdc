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
    export type ViolenceTypeData = {
        id: number | null;
        name: string | null;
    };
}
